function saveComment() {
    let form = $('#add_comment_form');
    let formData = form.serialize();
    let url = form.attr('action');

    $.post(url, formData, function (response) {
        if (response.status) {
            $('#message_div div').removeClass('alert-danger').addClass('alert-success').html(response.message).fadeIn();
            form.find('input, textarea').val('');
        } else {
            let text = '';
            $.each(response.message, function (index, value) {
                text += '<p>' + value + '</p>';
            });
            $('#message_div div').removeClass('alert-success').addClass('alert-danger').html(text).fadeIn('slow');
        }
    }, 'json');
}
