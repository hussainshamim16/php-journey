<?php
// hello world 
echo "hello";
/*
echo ye case sensitive nhi hey 
ye ouput browser per dikhata hey 
ye php ka aike prebuild function hey

"" '' dosno chaley gey
*/



// Variables vo box jis mey data store hota hey kesei bhi kisam ka data dal do
$name = "hussain shamim";
$age = 10;
$color = "green";
echo $age;

// how to use html in php and php in html
/*koi bhai html tag ap echo key "" mey daldo vo chley ga */ echo "<h1 style='color: red'>hello i am ". $name ."</h1>";
?>
<a href="#" style='color:<?php echo $color; ?>'>my age <?php echo $age; ?> </a>


 