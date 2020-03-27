<?php


namespace App\Controllers;

use App\Models\Comment;
use App\Support\Validation;

class CommentsController extends BaseController
{
    public function save()
    {
        $data = $_POST;

        $valid = Validation::checkIfParamsNotEmpty($data);
        
        var_dump($valid); die;

        $status = false;

        $tblComment = new Comment();
        $saved = $tblComment->saveComment($data);

        if ($saved) {
            $status = true;
            $responseMessage = 'saved!';
        } else {
            $responseMessage = 'error!';
        }

        return json_encode(['status' => $status, 'message' => $responseMessage]);
    }

    public function toggleStatus()
    {
        $data = $_POST;

        $data['value'] = ($data['value'] === 'true') ? 1 : 0;

        $status = false;

        $tblComment = new Comment();
        $updated = $tblComment->toggleComment($data);

        if ($updated) {
            $status = true;
            $responseMessage = 'updated!';
        } else {
            $responseMessage = 'error!';
        }

        return json_encode(['status' => $status, 'message' => $responseMessage]);
    }
}