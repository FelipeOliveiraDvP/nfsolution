$('#change-password-form').validate({   
    submitHandler: function(form) {
        $('.form').hide();
        $('#form-status').removeClass('d-none'); 
        form.submit();        
    }, 
    rules: {
        'new-password': {
            required: true,
            minlength: 8
        },
        'confirm-password': {
            required: true,
            minlength: 8,
            equalTo: '#new-password'            
        },
    },
    messages: {
        'new-password': {
            required: 'Informe a nova senha',
            minlength: 'A senha deve ter no mínimo 8 caracteres'
        },
        'confirm-password': {
            required: 'Informe novamente a senha',
            minlength: 'A senha deve ter no mínimo 8 caracteres',
            equalTo: 'As senhas precisam ser iguais'            
        },
    }
});