<?php


namespace App\Controllers;

use App\Models\Comment;
use App\Support\Validation;

class CommentsController extends BaseController
{
    public function save()
    {
        $data = $_POST;
        $status = true;

        $isValid = Validation::checkIfParamsNotEmpty($data);

        if (!$isValid) {
            $errorMessages = Validation::getErrorMessages();
            $status = false;

            echo json_encode(['status' => $status, 'message' => $errorMessages]);
            die;
        }

        $tblComment = new Comment();
        $saved = $tblComment->saveComment($data);

        if ($saved) {
            $responseMessage = 'comment added';
        } else {
            $status = false;
            $responseMessage = 'error saving comment';
        }

        echo json_encode(['status' => $status, 'message' => $responseMessage]);
    }

    public function toggleStatus()
    {
        $data = $_POST;

        $data['value'] = ($data['value'] === 'true') ? 1 : 0;
        $status = true;

        $tblComment = new Comment();
        $updated = $tblComment->toggleComment($data);

        if ($updated) {
            $responseMessage = 'comment status updated!';
        } else {
            $status = false;
            $responseMessage = 'error updating comment';
        }

        echo json_encode(['status' => $status, 'message' => $responseMessage]);
    }
}