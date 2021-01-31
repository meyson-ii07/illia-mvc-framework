<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\Student;

class SiteController extends Controller
{

    public function main(Request $request)
    {
        $student = new Student();

        var_dump($_POST);
        var_dump($_GET);
        if($request->isPost()) {
            $student->handleData($request->getData());
            $student->validate();
        }
        return $this->render('main', ['student' => $student]);
    }

}