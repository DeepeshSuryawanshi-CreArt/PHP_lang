<?php
    $age = 81;

    if(($age > 0) and ($age <= 11)){
        echo "Your are a Kid";
    }
    elseif(($age > 11) and ($age <= 18)){
        echo "Your are Miner";
    }
    elseif(($age > 18) and ($age <= 22) ){
        echo "you are a Teenager";
    }
    elseif(($age > 22) and ($age <= 50)){
        echo "you are a Adult";
    }
    elseif(($age > 50) and ($age <= 80)){
        echo "You are Senior Citizen";
    }
    else{
        echo "You are Death";
    }

?>