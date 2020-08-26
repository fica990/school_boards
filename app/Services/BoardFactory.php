<?php


namespace App\Services;


class BoardFactory
{
    public static function getBoard($name): Board
    {
        switch ($name) {
            case "CSM":
                return new CSMBoard();
            case "CSMB":
                return new CSMBBoard();
            default:
                throw new \Exception("Unknown Board");
        }
    }
}