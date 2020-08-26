<?php


namespace App\Controllers;

use App\Models\Comment;
use App\Support\View;
use Exception;

class AdminController extends BaseController
{
    public function index()
    {
        $tblComment = new Comment();
        $comments = $tblComment->allComments();

        try {
            View::render('admin.index', compact('comments'));
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }
}