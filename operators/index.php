<?php
    $x= 20;
    $y= 10;
    echo $x + $y;
    echo "<br/>";
    echo $x - $y;
    echo "<br/>";
    echo $x * $y;
    echo "<br/>";
    echo $x / $y;
    echo "<br/>";
    echo $x % $y;
    echo "<br/>";
?>

<!-- Assignment Operators -->

<?php
    echo "Assignment Operators start <br/>";
    $v = 10;

    $v += 5;
    echo "$v <br/>";

    $v -= 5;
    echo "$v <br/>";
    
    $v *= 5;
    echo "$v <br/>";
    
    $v /= 2;
    echo "$v <br/>";
    
    $v %= 2;
    echo "$v <br/>";
?>

<!-- Comparison Operators -->

<?php
    echo "Comparison Operators strat\n <br/>";
    if(10 === '10'){
        echo "true";
    }
    else{
        echo "false";
    }
    echo "<br/>";
    if(10 == '10'){
        echo "true";
    }
    else{
        echo "false";
    }
    echo "<br/>";
    if(10 === '10'){
        echo "true";
    }
    else{
        echo "false";
    }
    echo "<br/> gerter then >  <br/>";
    if(10 >= '10'){
        echo "true";
    }
    else{
        echo "false";
    }
    echo "<br/> lesser then <  <br/>";
    if(10 <= '10'){
        echo "true";
    }
    else{
        echo "false";
    }
    echo "<br/> Logical Operatir <br/>";
    if(10 === 10 && 10 < 20){
        echo "true";
    }
    else{
        echo "false";
    }
    echo "<br/>";
    if(10 === 10 || 10 < 20){
        echo "true";
    }
    else{
        echo "false";
    }
    echo "<br/>";
?>

Increment / Decrement Operators
<?php
    $x = 5;
    echo $x++ ; // 6
    echo --$x; // 6, then $x becomes 5
    echo "<br/>";
    echo 5 <=> 10;  // -1
    echo 10 <=> 10; // 0
    echo 15 <=> 10; // 1

?>