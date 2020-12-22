$.validator.addMethod("currency", function (value, element) {
    return this.optional(element) || /(\d{1,3}(\.\d{3})*|(\d+))(\,\d{2})?$/.test(value);
}, "Please specify a valid amount");

$('#product-form').validate({
    rules: {        
        'product-title': {
            required: true,
        },
        'product-price': {
            required: true,            
            currency: true
        },
        'product-quantity': {
            required: true,
            number: true
        },        
    },
    messages: {        
        'product-title': {
            required: 'Por favor, informe um título!',
        },
        'product-price': {
            required: 'Por favor, informe um preço!',
            number: 'O preço pode conter apenas números',
        },
        'product-quantity': {
            required: 'Por favor, informe uma quantidade!',
            number: 'A quantidade deve conter apenas números',
        },
    }
});

$('#product-form').submit(function () {
    $('#form-status').hide();
    $('#form-status').removeClass('d-none');
});