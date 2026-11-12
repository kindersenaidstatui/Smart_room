$(document).ready(function () {
    $('#ligar').click(function () {
        $.ajax({
            url: 'http://10.122.41.169/led/ligarvermelho',
            type: 'POST',
            success: function (response) {
                console.log(response);
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: response.message,
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: response.message,
                    });
                }
            },

        });
    });
    
    $('#desligar').click(function () {
        $.ajax({
            url: 'http://10.122.41.169/led/desligarvermelho',
            type: 'POST',
            success: function (response) {
                console.log(response);
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: response.message,
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erro',
                        text: response.message,
                    });
                }
            },
        });
    });
});
