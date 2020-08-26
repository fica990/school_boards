<?php


namespace App\Support;


class Validation
{
    const MIN_GRADES_COUNT = 1;
    const MAX_GRADES_COUNT = 4;
    protected static $errorMessage;

    public static function checkParam($param)
    {
        $status = true;

        if (!is_numeric($param)) {
            $status = false;
            static::$errorMessage = 'Bad ID';
        }

        return $status;
    }

    public static function validateGradesCount(array $grades)
    {
        $status = true;

        if (count($grades) < self::MIN_GRADES_COUNT) {
            $status = false;
            static::$errorMessage = 'Student has no grades';
        }

        if (count($grades) > self::MAX_GRADES_COUNT) {
            $status = false;
            static::$errorMessage = 'Student has more than 4 grades';
        }

        return $status;
    }

    public static function getErrorMessage()
    {
        return static::$errorMessage;
    }
}