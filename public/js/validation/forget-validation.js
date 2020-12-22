$('#forget-form').validate({    
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

$('#forget-form').submit(function() {    
    $('.form').hide();
    $('#form-status').removeClass('d-none');    
});