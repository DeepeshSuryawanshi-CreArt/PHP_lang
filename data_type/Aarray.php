<?php

// Associative Arrays
    $person =[
        "name"=>"Deepesh",
        "age"=> 22,
        "technology" => "Typescript/Javascript and Python"
    ];
    
    /* echo $person["name"];
    echo $person["age"];
    echo $person["technology"]; */
    
    $person["name"] = "Harshil Raval";
    
    echo $person["name"];
    
    ?>
<br/>
<?php
    // Multidimensional Arrays
    $persons = [
        ["name"=>"Deepesh singh","Tech"=>"TypeScript / Python"],
        ["name"=>"Harshil Raval","Tech"=>"Javascript / Python"],
        ["name"=>"Ketan Dalsaniya","Tech"=>"PHP / Laravel"],
    ];
    
    function printperson($data){
        echo "Name:$data[name] Technolory:$data[Tech] <br/>";
    };
    
   array_map("printperson",$persons)
?>