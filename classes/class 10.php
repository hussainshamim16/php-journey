<?php  
// loops in php


// for loop
$table = 0;
$kable = 10;



for ($i=10; $i >= $table; $i--) { 
//   echo $table." x ".$i." = ".$i * $table."<br/>";
echo $i ."<br>";
};




"<br/>";
echo "<hr />";



for ($i=0; $i <= $kable; $i++) { 
//   echo $table." x ".$i." = ".$i * $table."<br/>";
echo $i ."<br>";
};



echo "<hr />";
//while loops 

$k = 1;
while($k <= 10){
    echo 'while '.$k .'<br>';
    $k++;
}


echo "<hr />";
//do while loops 
$l = 1;
do{
    echo 'do while '.$l .'<br>';
    $l++;
}

while($l <= 10);
?>