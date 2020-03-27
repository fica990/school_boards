<?php


namespace App\Support;


class Validation
{
    public static function checkIfParamsNotEmpty(array $data)
    {
        $errors = [];

        foreach ($data as $fieldName => $item) {
            if (empty($item)) {
                $errors[] = $fieldName . ' is empty';
            }
        }

        return $errors;
    }
}