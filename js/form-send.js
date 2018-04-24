$('#contact-form').submit(function(event) {
    event.preventDefault();
    var formMessages = $('#alert-text');
    var alertContainer = $('#alertContainer');
    var form = $('#contact-form');
    var formData = $(form).serialize();
    $.ajax({
        method: 'get',
        url: 'mailer.php',
        data: formData
    })
    .done(function(response) {
        $(alertContainer).append(response);
    
        $('#naam').val('');
        $('#email').val('');
        $('#telefoon').val('');
        $('#bericht').val('');
    })
    .fail(function(response) {
        $(alertContainer).append(response);
    });
});