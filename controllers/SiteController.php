<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\Student;

class SiteController extends Controller
{

    public function list()
    {
        $students = Student::find();
        return $this->render('list.html.twig', ['students' => $students]);
    }

    public function save()
    {
        $student = new Student();
        $request = Application::$app->request;

        if($request->isPost()) {
            $student->handleData($request->getData());
            $student->validate();
            $student->save();
            $this->redirect('');
        }
        return $this->render('save.html.twig', ['student' => $student]);
    }

    public function update()
    {
        $request = $request = Application::$app->request;
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
        return $this->render('save.html.twig', ['student' => $student]);
    }

    public function delete()
    {
        $request = Application::$app->request;
        $id = $request->getData()['id'];
        Student::delete($id);
        $this->redirect('list');
    }
}