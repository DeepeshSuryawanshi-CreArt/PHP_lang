<?php
    $fruits = ["apple", "banaba", "papaya", "mango"];
    
    for ($i=0; $i < count($fruits); $i++) { 
        echo "$fruits[$i] ,";
    }
?>
<br>
Array Operators
<br>
| Operator | Name       | Example     | Result                  |<br>
| -------- | ---------- | ----------- | ----------------------- |<br>
| `+`      | Union      | `$x + $y`   | Combines arrays         |<br>
| `==`     | Equality   | `$x == $y`  | true if same key/value  |<br>
| `===`    | Identity   | `$x === $y` | true if same order/type |<br>
| `!=`     | Inequality | `$x != $y`  | true if different       |<br>
| `<>`     | Inequality | `$x <> $y`  | same as above           |<br>
<br>
<?php

$a = ["a" => "apple", "b" => "banana"];
$b = ["b" => "banana", "a" => "apple"];

var_dump($a == $b);  // true
var_dump($a === $b); // false

$compine = $a + $b;

echo count($compine);

?>