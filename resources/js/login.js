$(document).ready(function() {

    $("#entrar").click(function() {

        $.ajax({
            url: "/login",
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content")
            },
            data: {
                email: $("#email").val(),
                senha: $("#senha").val()
            },
            success: function(response) {
                console.log(response);
                if (response['erro'] == 'n') {
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso!',
                        text: 'Login realizado com sucesso!',
                        showConfirmButton: false,
                        timer: 2000,
                    });

                    window.location.href = "/admin";

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro!',
                        text: response['mensagem'],
                        showConfirmButton: false,
                        timer: 2000,
                    });
                }
            },
            error: function(xhr) {
                const mensagem = xhr.responseJSON?.message ?? "Não foi possível realizar o login.";

                Swal.fire({
                    icon: 'error',
                    title: 'Erro!',
                    text: mensagem,
                    showConfirmButton: false,
                    timer: 2000,
                });
            }
        });

    });
});
