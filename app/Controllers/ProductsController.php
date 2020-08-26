<?php


namespace App\Controllers;

use App\Models\Comment;
use App\Models\Product;
use App\Support\View;
use Exception;

class ProductsController extends BaseController
{
    public function index()
    {
        $tblProduct = new Product();
        $products = $tblProduct->allProducts();

        $tblComment = new Comment();
        $comments = $tblComment->allComments(true);

        try {
            View::render('products.index', compact('products', 'comments'));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}