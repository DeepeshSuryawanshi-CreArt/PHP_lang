<?php
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

$l1 = new ChildClass();

$l1->show();

?>
<script>
    class parent{
        show() {
            console.log("Hello Parent class")
        }
    }

    class child extends parent{
        show(){
            super.show()
            console.log("Child Hello")
        }
    }

    let c1 = new child();
    c1.show();
</script>