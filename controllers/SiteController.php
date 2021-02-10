<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\Student;

class SiteController extends Controller
{

    public function list(Request $request)
    {
        $students = Student::find();
        return $this->render('list', ['students' => $students]);
    }

    public function save(Request $request)
    {
        $student = new Student();

        if($request->isPost()) {
            $student->handleData($request->getData());
            $student->validate();
            $student->save();
            $this->redirect('');
        }
        return $this->render('save', ['student' => $student]);
    }

    public function update(Request $request)
    {
        $student = new Student();
        $id = $request->getData()['id'];

        if (isset($id))
        {
            $data = Student::findOne($id);
            $student->handleData($data);
        }

        if($request->isPost()) {
            $student->handleData($request->getData());
            $student->validate();
            $student->save();
            $this->redirect('');
        }
        return $this->render('save', ['student' => $student]);
    }

    public function delete(Request $request)
    {
        $id = $request->getData()['id'];
        Student::delete($id);
        $this->redirect('');
    }
}