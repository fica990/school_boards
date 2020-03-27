$(document).ready(function () {
    $('#comments_table_admin .comment_status').click(function () {
        let commentId = $(this).data('comment_id');
        let value = $(this).is(':checked');

        toggleCommentStatus(commentId, value);
    });
});

function saveComment() {
    let form = $('#add_comment_form');
    let formData = form.serialize();
    let url = form.attr('action');

    $.post(url, formData, function (response) {
        if (response.status) {
            alert(response.message);
        }
    }, 'json');
}

function toggleCommentStatus($commentId, value) {
    $.post('/toggle-comment', {comment_id: $commentId, value: value}, function (response) {
        if (response.status) {
            alert(response.message);
        }
    }, 'json');
}
