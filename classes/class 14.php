<?php
// $arr1 = array(
//     ["name"=>"Hussain"],
//     ["name"=>"Ali"],
//     ["name"=>"Rehman"],
//     ["name"=>"Farhan"]
// );
// foreach ($arr1 as $key => $value) {
//     // $arr1[$key,$value];
//     // print_r($value);
//     // $arr1[$key,$value];
//     foreach ($key as $value) {
//         echo '<pre>'; 
//         print_r($key);
//         echo '<pre>'; 
//     };;
// }
// for($i=0; $i<count($arr1); $i++){
//     // echo "i challa",$i,"<br/>";
//     echo "<pre>";
//     echo print_r($arr1) ;
//     echo "<pre>";
//     for ($j=0; $j <$i ; $j++) { 
//       echo "RR challa",$j,"<br/>"; 
//     };
// }
$arr2 = ["hussain", "shamim", "hunain"];
foreach ($arr2 as $i) {
    echo $i . "<br>" . "<br>";

}
;
echo '<hr>';
$collectionOfarray = array(
    array("honda", 22, 12),
    array("civic", 23, 11),
    array("fortuner", 24, 10)
);

// foreach ($arr3 as $j) {
//     echo $j;
// }
// echo $collectionOfarray[0][0]."  ";
// echo $collectionOfarray[0][1]."  ";
// echo $collectionOfarray[0][2]."  ";
// echo '<br />';
// echo '<br />';
// echo $collectionOfarray[1][0]."  ";
// echo $collectionOfarray[1][1]."  ";
// echo $collectionOfarray[1][2]."  ";
// echo '<br />';
// echo '<br />';
// echo $collectionOfarray[2][0]."  ";
// echo $collectionOfarray[2][1]."  ";
// echo $collectionOfarray[2][2]."  ";
// for loops  
// for ($i=0; $i < count($collectionOfarray); $i++) { 
//     // echo print_r($collectionOfarray[$i])."<br/>";
//     for ($j=0; $j < 3 ; $j++) { 
//         echo '<p style = "color:red; font-size: 1em; ">'.$collectionOfarray[$i][$j]."   ".'</p>';
//     };
//     echo "<br/>";
// }
foreach ($collectionOfarray as $key => $i) {
    // $arr1[$key,$value];
    // print_r($value);
    echo $key.'<br/>';
    // $arr1[$key,$value];
    foreach ($i as $key => $j) {
        // echo $collectionOfarray[0][0]."  ";
        echo $j.'<br/>';
    }
    ;
    echo '<br/>';
}
?>