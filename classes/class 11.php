<?php
// function in php

// types of fnc
// 1 user define
// 2 inbuilt fnc
// 3 simple fnc
// 4 returning value fnc
// 5 anonymous fnc
// 6 variable fnc
// 7 perametor fnc

function simple(){
    echo "simple fnc";
};
simple();

function perametorize($a,$b){
    // echo "hello world";
    echo "<br>".$a+$b;
};
perametorize(8,4);

function ret($a,$b){
    // echo "hello world";
return $a*$b;
};
$same = ret(8,4);
echo "<br/>".$same;

function defultp($a=9,$b=5){
    // echo "hello world";
echo "<br/>".$a*$b;
};
defultp();

?>