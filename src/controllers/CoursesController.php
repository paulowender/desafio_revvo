<?php

class CoursesController
{
    public function getCourses()
    {
        $db = new Database();
        $sql = "select * from courses order by id desc";
        $rows = $db->query($sql)->fetchAll();
        return $rows;
    }
}
