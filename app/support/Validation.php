<?php


namespace App\Support;


class Validation
{
    protected static $errorMessages;

    public static function checkIfParamsNotEmpty(array $data)
    {
        $status = true;

        foreach ($data as $fieldName => $item) {
            if (empty($item)) {
                $status = false;
                static::$errorMessages[] = $fieldName . ' is empty';
            }
        }

        return $status;
    }

    public static function getErrorMessages()
    {
        return static::$errorMessages;
    }
}