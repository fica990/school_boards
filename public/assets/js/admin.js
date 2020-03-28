$(document).ready(function () {
    $('#comments_table_admin .comment_status').click(function () {
        let commentId = $(this).data('comment_id');
        let value = $(this).is(':checked');

        toggleCommentStatus(commentId, value);
    });
});

function toggleCommentStatus($commentId, value) {
    $.post('/toggle-comment', {comment_id: $commentId, value: value}, function (response) {
        let messageDiv = $('#message_div div');

        if (response.status) {
            messageDiv.removeClass('alert-danger').addClass('alert-success').html(response.message).fadeIn();
            hideNotification(messageDiv, 1000);
        } else {
            let text = '';
            $.each(response.message, function (index, value) {
                text += '<p>' + value + '</p>';
            });
            messageDiv.removeClass('alert-success').addClass('alert-danger').html(text).fadeIn('slow');
            hideNotification(messageDiv, 2500);
        }
    }, 'json');
}

function hideNotification(element, time) {
    setTimeout(function () {
        element.fadeOut("slow");
    }, time)
}