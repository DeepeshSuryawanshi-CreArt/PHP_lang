<?php
    class abc{
        public string $name = 'Deepesh';
        function getname():string{
            return $this->name;
        }
        public function __tostring():string{
            return "can't print Object as a String: ".get_class($this);
        }
    }

    $test = new abc();
    echo $test->getname();
    echo "<br/>";
    echo $test;