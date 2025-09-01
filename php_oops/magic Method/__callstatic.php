<?php
    class student{
        private string $name;
        private int $class;
        private static function setDetail(string $n, int $c):void{
            var_dump($n);
            var_dump($c);
        }
        private static function hello(){
            echo "Hello , Deepesh sir.";
        }

        public static function __callStatic($method, $args):void{
            if(method_exists(__CLASS__,$method)){
                call_user_func_array([__CLASS__,$method],$args);
            }
            else{
                echo "Merthod is Not Exist. '$method' ";
            }
        }
      
    }
    student::setDetail(n:"Deeepsh",c:"12");
    echo"<br/>";
    student::hello();