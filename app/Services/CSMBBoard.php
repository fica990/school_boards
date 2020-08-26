<?php


namespace App\Services;


class CSMBBoard implements Board
{
    const MINIMUM_SCORE = 8;
    protected $status;

    public function calculate($grades)
    {
        if (count($grades) > 2) {
            if (($key = array_search(min($grades), $grades)) !== false) {
                unset($grades[$key]);
            }
        }

        $biggestGrade = max($grades);

        if ($biggestGrade > self::MINIMUM_SCORE) {
            $this->status = 'PASSED';
        } else {
            $this->status = 'FAILED';
        }
    }

    public function publish($data)
    {
        //todo ovo ne stigoh :'(
    }
}