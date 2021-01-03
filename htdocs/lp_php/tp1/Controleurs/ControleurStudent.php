<?php

final class ControleurStudent
{
    public function defautAction()
    {
        $S_student =  new Student();

        Vue::montrer('student/voir', array('student' =>  $S_student->getStudentGroups()));

    }

}