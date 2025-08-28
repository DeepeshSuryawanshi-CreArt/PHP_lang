<?php
class person
{
    // propretiest
    public $name;
    public $age;
    public $gender;

    function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    // method
    public function details()
    {
        echo "Name: " . $this->name . " Age: " . $this->age . " Gender: " . $this->gender;
    }
}

$p1 = new person(name: "Deepesh",age:23,gender:"Male");
$p1->details();