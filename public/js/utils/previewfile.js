/**
 * 
 * @param {string} input the input file 
 * @param {string} previewId the div to show image preview
 */
function previewFile(input, previewId) {
    var file = $(input).get(0).files[0];

    if (file) {
        var reader = new FileReader();

        reader.onload = function() {
            $(previewId).attr('src', reader.result);
        }

        reader.readAsDataURL(file);
    }
}