<?php
class person{
    private string $first_name;
    private string $last_name;

    private function setName($fname,$lname): void{
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function __call($method, $args): void{
        if(method_exists(object_or_class: $this,method: $method)){
            call_user_func_array([$this,$method],$args);
        }
        else{
            echo "this is a Privite or undefined Method:". $method;
            print_r($args);
        }
    }

}

$test = new person();
$test->setName(fname: "Deepesh",lname: "singh");

echo "<pre>";
print_r($test);
echo "</pre>";