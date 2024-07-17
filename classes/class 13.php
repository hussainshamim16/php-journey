<?php
// associative array

// jes mey array kei key or value define hogi ;
$headadd = "<h1>";
$headclose = "</h1>";
$userData=[
    "name"=>"m.hussain",
    "age"=>17,
    "class"=>"wma",
    "institute"=>"smit"

];

// echo $headadd.$userData["name"].$headclose."<br/>";
echo $userData["name"]."<br/>";
echo $userData["age"]."<br/>";
echo $userData["class"]."<br/>";
echo $userData["institute"];

// multi dimentiol array 

// array key andar bohot ssary array

$collectionOfUsers =[
    [
        "id" => 1,
        "name"=>"m.hussain",
        "age"=>17,
        "class"=>"wma",
        "institute"=>"smit"
    
    ],
    [
        "id" => 2,
        "name"=>"ali",
        "age"=>15,
        "class"=>"wma",
        "institute"=>"smit"
    
    ],
    [
        "id" => 3,
        "name"=>"rehman",
        "age"=>21,
        "class"=>"wma",
        "institute"=>"smit"
    
    ],
    [
        "id" => 4,
        "name"=>"akbar",
        "age"=>11,
        "class"=>"wma",
        "institute"=>"smit"
    
    ],
    [
        "id" => 5,
        "name"=>"ghani",
        "age"=>17,
        "class"=>"wma",
        "institute"=>"smit"
    
    ],
];
 


//  foreach ($collectionOfUsers as $key => $value) {
//     echo $collectionOfUsers[];
//  };

for ($i=0; $i < count($collectionOfUsers); $i++) { 
    echo "<br />";
    echo "<br />";
    echo "cahlla";
    echo var_dump($collectionOfUsers[$i]);
    // echo ;
    echo "<br />";
    // for ($j=0; $j < $collectionOfUsers[$i]; $j++) { 
    // echo "<br />";
    // echo "<br />";
    // echo $collectionOfUsers[$j]; 
    // };
}
?>