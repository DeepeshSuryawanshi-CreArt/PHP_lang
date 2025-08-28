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
        echo "Name: " . $this->name . " Age: " . $this->age . " Gender: " . $this->gender,"<br/>";
    }
}

class employee extends person{
    public $role;
    public $salary;
    public function __construct($name,$age,$gender,$role,$salary){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->role = $role;
        $this->salary = $salary;
    }
    public function into(){
        $this->details();
        echo "Hello My Name is ".$this->name." and I'm a ".$this->role."<br/>";
    }
}
$p1 = new person(name: "Deepesh",age:23,gender:"Male");
$e2 = new employee(name: "Deepesh",age:23,gender:"Male",role:"Full Stack Developer",salary:12000);
$e1 = new employee(name: "Harshil",age:26,gender:"Male",role:"React js Developer",salary:12000);
$e1->into();
$e2->into();