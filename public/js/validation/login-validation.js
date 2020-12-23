$('#login-form').validate({   
    submitHandler: function(form) {
        $('.form').hide();
        $('#form-status').removeClass('d-none'); 
        form.submit();        
    }, 
    rules: {
        'user-email': {
            required: true,
            email: true
        },
        'user-pass': {
            required: true,
            minlength: 8
        },
    },
    messages: {
        'user-email': {
            required: 'Por favor, informe um e-mail!',
            email: 'Informe um e-mail válido!'
        },
        'user-pass': {
            required: 'Por favor, informe uma senha!',
            minlength: 'A senha precisa ter no mínimo 8 caracteres'
        },
    }
});