<?php

class CoursesController
{
    public function getCourses()
    {
        try {
            $db = new Database();
            $sql = "select * from courses order by id desc";
            $rows = $db->query($sql);
            return $rows;
        } catch (Exception $th) {
            echo $th->getMessage();
            return [];
        }
    }
}
