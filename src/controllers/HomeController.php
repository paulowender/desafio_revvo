<?php

include_once 'CoursesController.php';

class HomeController
{
    public function index()
    {
        $controller = new \CoursesController();
        $courses = $controller->getCourses();

        return ViewRender::getView('home/index', ['courses' => $courses]);
    }

    public function create()
    {
        return ViewRender::getView('home/create');
    }

    public function update()
    {
        return ViewRender::getView('home/update');
    }
}
