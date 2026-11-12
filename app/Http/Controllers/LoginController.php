<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\TokenUsuario;

class LoginController extends Controller
{
    public function login_html(Request $request)
    {
        return view('login');
    }

    public function login_action(Request $request)
    {
        $isApiRequest = $request->is('api/*');

        $request->validate([
            'email' => ['required', 'email'],
            'senha' => ['required'],
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        $senhaValida = false;
        $senhaLegada = false;

        if ($usuario) {
            try {
                $senhaValida = Hash::check($request->senha, $usuario->senha);
            } catch (\RuntimeException $exception) {
                $senhaValida = false;
            }

            if (! $senhaValida && hash_equals($usuario->senha, md5($request->senha))) {
                $senhaValida = true;
                $senhaLegada = true;
            }
        }

        if (! $senhaValida) {
        if ($isApiRequest || $request->expectsJson() || $request->ajax()) {
                return response()->json(['erro' => 's', 'mensagem' => 'Email ou senha inválidos'], 200);
            }

            return redirect()->back()->withErrors(['email' => 'Credenciais inválidas.']);
        }

        if ($senhaLegada || Hash::needsRehash($usuario->senha)) {
            $usuario->senha = Hash::make($request->senha);
            $usuario->save();
        }

        if (! $isApiRequest) {
            $request->session()->put('usuario_id', $usuario->id);
            $request->session()->regenerate();
        }

        $token = new TokenUsuario();
        TokenUsuario::where('usuario_id', '=', $usuario->id)->delete();
        $token->usuario_id = $usuario->id;
        $token->token = md5($usuario->email . now());
        $token->valido_ate = now()->addDays(2);
        $token->save();

            if ($isApiRequest || $request->expectsJson() || $request->ajax()) {
            return response()->json([
                'erro' => 'n',
                'mensagem' => 'Login realizado com sucesso',
                'token' => $token->token,
            ], 200);
        }

        return redirect('/admin')->with('status', 'Login realizado com sucesso. Bem-vindo, ' . $usuario->nome . '!');
    }

    public function logado(Request $request)
    {
        $usuario = Usuario::findOrFail(
            $request->session()->get('usuario_id')
        );

        return view('welcome', compact('usuario'));
    }

    public function login_api(Request $request)
    {
        return $this->login_action($request);
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
