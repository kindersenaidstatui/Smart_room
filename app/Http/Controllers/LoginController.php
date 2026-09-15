<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\TokenUsuario;

class LoginController extends Controller
{
    public function login_html(Request $request){
        return view('login');
    }

    public function logado(Request $request)
{
    $usuario = Usuario::findOrFail(
        $request->session()->get('usuario_id')
    );

    return view('welcome', compact('usuario'));
}


    public function login_api(Request $request){

        $request->validate([
            'email' => 'required',
            'senha' => 'required'
        ]);

        // A senha foi armazenada pelo Tinker com Hash::make(), portanto ela
        // deve ser conferida por Hash::check() e nunca por comparação/MD5.
        $usuario = Usuario::where('email', $request->email)->first();

        if ($usuario && Hash::check($request->senha, $usuario->senha)) {
            $request->session()->regenerate();
            $request->session()->put('usuario_id', $usuario->id);

            $token = new TokenUsuario();
            TokenUsuario::where('usuario_id', '=', $usuario->id)->delete();
            $token->usuario_id = $usuario->id;
            $token->token = md5($usuario->email . now());
            $token->valido_ate = now()->addDays(2);
            $token->save();

            return response()->json(['erro' => 'n','mensagem' => 'Login realizado com sucesso', 'token' => $token->token], 200);
        } else {
            return response()->json(['erro' => 's','mensagem' => 'Email ou senha inválidos'], 200);
        }


    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
