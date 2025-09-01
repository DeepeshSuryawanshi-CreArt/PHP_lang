<?php
class student{
    public string $name;
    public int $class;
    public string $course;

    public function setName(string $name):void{
        $this->name = $name;
    }
    public function setClass(int $class):void{
        $this->class = $class;
    }
    public function setCourse(string $course):void{
        $this->course = $course;
    }

    public function __isset($name){
        echo isset($this->$name);
    }

}

$test = new student();
$test->setName("Deepesh");
$test->__isset("name");