<?php
// array 
$arr1 = [
    'hussain',
    'hasnain',
    'hunain'
];

// for($i=0;$i<=count(arr1);$i++){
//     echo "<br>".arr1[$i];    
// };

//  foreach( as $key => $value){
//     echo arr1[$value]
//  };

 foreach ($arr1 as $key => $value) {
    echo '<h1 style = "color:red; font-family:sans-serif;">'.$arr1[$key].'</h1>';
 }
?>
