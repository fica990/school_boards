<?php


namespace App\Controllers;


use App\Models\Grade;
use App\Models\Student;
use App\Services\BoardFactory;
use App\Support\Validation;
use Exception;

class StudentController extends BaseController
{
    public function studentData($id)
    {
        //check ID param
        if (!Validation::checkParam($id)) {
            echo Validation::getErrorMessage();
            die;
        }
        if (!is_numeric($id)) {
            echo 'Bad ID';
            die;
        }

        //check if student exists
        $student = new Student();
        $studentData = $student->getStudentData($id);

        if (!$studentData) {
            echo 'No student with that ID';
            die;
        }

        $grade = new Grade();
        $grades = $grade->studentGrades($id);

        $isValid = Validation::validateGradesCount($grades);

        if (!$isValid) {
            echo Validation::getErrorMessage();
            die;
        }

        $studentData->grades = $grades;

        try {
            $boardObj = BoardFactory::getBoard($studentData->board_name);

            $boardObj->calculate($grades);
            $boardObj->publish($studentData);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}