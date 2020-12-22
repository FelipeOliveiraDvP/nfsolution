$('#login_form').validate({    
    rules: {
        user_email: {
            required: true,
            email: true
        },
        user_pass: {
            required: true,
            minlength: 8
        },
    },
    messages: {
        user_email: {
            required: 'Por favor, informe um e-mail!',
            email: 'Informe um e-mail válido!'
        },
        user_pass: {
            required: 'Por favor, informe uma senha!',
            minlength: 'A senha precisa ter no mínimo 8 caracteres'
        },
    }
});

$('#login_form').submit(function() {    
    $('.form').hide();
    $('#login_status').removeClass('d-none');    
});