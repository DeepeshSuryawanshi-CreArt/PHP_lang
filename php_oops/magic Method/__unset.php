<?php
class student{
    public string $name;
    private int $class;
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
    public function __unset($name){
        unset($this->$name);
    }

}

$test = new student();
$test->setName("Deepesh");
$test->setClass(12);
$test->setCourse("PHP");
print_r($test); 
echo "<br>";
unset($test->course);
unset($test->class);
echo "<br>";
print_r($test);