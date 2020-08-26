<?php


namespace App\Services;


interface Board
{
    public function calculate($studentId);

    public function publish($data);
}