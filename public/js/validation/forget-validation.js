$('#forget-form').validate({    
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
    },
    messages: {
        'user-email': {
            required: 'Por favor, informe um e-mail!',
            email: 'Informe um e-mail válido!'
        },        
    }
});
