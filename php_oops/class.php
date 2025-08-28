<?php
class person
{
    // propretiest
    public $name;
    public $age;
    public $gender;

    // method
    public function details(){
        echo "Name: ".$this->name." Age: ".$this->age." Gender: ".$this->gender;
    }
}

$p1 = new person();
$p1->name = "Deepesh";
$p1->age = 23;
$p1->gender = "Male";

$p1->details();