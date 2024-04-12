$(document).ready(function() {
    $('#conversionForm').submit(function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'convertCurrency',
            data: formData,
            success: function(response) {
                $('#result').html(response);
            }
        });
    });
});
