<?php 
class student{
    public string $name;
    public string $course;
    private int $class;

    public function __construct($name,$course,$class){
        $this->name = $name;
        $this->course = $course;
        $this->class = $class;
    }
    public function __sleep(){
        return array('name','course');
    }

    public function __wakeup(){
        echo "Just print message";
    }
}

$s = new student("Deepesh","PHP",12);
$result = serialize($s);
echo $result;
echo "<br/>";
$usz = unserialize($result);
print_r($usz);