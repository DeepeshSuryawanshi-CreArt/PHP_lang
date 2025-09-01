<?php
interface parent1
{
    function cal($a, $b);
}

interface parent2
{
    function sub($a, $b);
}


class child implements parent1, parent2
{
    function cal($a, $b)
    {
        return $a + $b;
    }
    function sub($a, $b)
    {
        return $a - $b;
    }
}

$test = new child();

echo $test->cal(10, 20) . "<br/>";
echo $test->sub(10, 10);

?>
<script>
    class Animal {
        constructor() {
            if (new.target === Animal) {
                throw new Error("Cannot instantiate abstract class.");
            }
        }
        speak() {
            throw new Error("Method 'speak()' must be implemented.");
        }
    }

    class Dog extends Animal {
        speak() {
            console.log("Bark!");
        }
    }

    const dog = new Dog();
    dog.speak(); // Output: Bark!

</script>