<?php
 class Animal{
    public string $name;

    function speak():string{
        return $this->name." is Make Sound";
    }

 }
 class ParentClass {
    protected function show(): void {
        echo "Parent show";
    }
}

class ChildClass extends ParentClass {
    public function show(): void { // made it public (wider)
        echo "Child show";
    }
}