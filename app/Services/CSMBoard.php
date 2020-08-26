<?php


namespace App\Services;


class CSMBoard implements Board
{
    const MINIMUM_SCORE = 7;
    protected $status;

    public function calculate($grades)
    {
        $averageScore = array_sum($grades) / count($grades);

        if ($averageScore >= self::MINIMUM_SCORE) {
            $this->status = 'PASSED';
        } else {
            $this->status = 'FAILED';
        }
    }

    public function publish($data)
    {
        echo json_encode(['status' => $this->status, 'data' => $data]);
    }
}