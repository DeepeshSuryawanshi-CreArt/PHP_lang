<?php
function my_callback($item): int {
  return strlen(string: $item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map(callback: "my_callback", array: $strings);
print_r($lengths);

?>            
<br/>
<br/>
<?php
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
?>