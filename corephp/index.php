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


<?php
//  how to display error in php 
/* jab bhi hamey php ka default error ata hey to to vo black screen mey ata hey 
eror kia hey screen per dekhney key liye php.ini file find karna parey gei 
or vha display error ko on karna pery ga */ 

// constants in php = kesi value ka data store krna just aike dafa update nhi 
//variable = update possible // constant = only first time
// 2 ways of writing constant
const ali = 'male'; //first way

// const ali = 'female'; error
// ali = 'female'; error

define("classes",19); // 2nd way
echo "<br />".ali;
echo "<br />".classes;


// data types in php 
/* kis type ka data daal rhey hen 8 types kei data type hen 

string = 'atoz'
intiger = 110
float = 10.0
bollean = true false
null = no value in variable 
array = all data types in variable 
object = for object oriented programing language
resourse = db connection, external library values yha store kar skty ho

var_dump function string kei type bata ta hey 

*/

echo "<br />";

$userName = "abdull";
// echo var_dump($userName);
$userage = 20;
// echo var_dump($userage);
$userCash = 20.21;
// echo var_dump($userCash);
$userALive = true;
// echo var_dump($userALive);
$userPhone = null;
// echo var_dump($userPhone);
$userAccounts = ['ubl',1200,true,'meezan bank',200,false];
// echo var_dump($userAccounts);
// $userData = new className();

// the conditional statemnet in php 
// 3 ways of it 

if(5>7){
  echo "yes its enable";
}else{
  echo "not its disable;
}

// practice 
$username = ["ali","Bano","Chodri","Dokra"];
foreach ($username as $user){
echo $user . '\n';
}

	$a = 10;
	echo $a++;
	echo $a;
	echo ++$a;

	echo "\n".(2<=>2); // -1 0 1
	echo "\n";

	// Conditional statement 
	if(20>10){
		echo "yes 20 above 10";
	}elseif(10>211){
		echo "yes 10 above 2";
	}else{
		echo "nothing";
	}

	echo "\n";

	$city="islamabad";
	switch($city){
		case "islamabad":
		echo"capital of pk";
		break;

		case "karachi":
		echo "City Of Lite";
		break;

		case "multan":
		echo "city of cent";
		break;

		default :
		echo("no city found");
		break;
	}

	#logical opt
	$userClass = 12;
	$userAge = 17;
	$userRoll = 12;
	$userEnroll = 18;

	if($userAge > $userClass && $userEnroll == 18) {
		echo("je ap ess class key liye apply kar skty hen!");
	}else{
		echo "you are not eligible";
	}

	#For LOOP
	for($i=0;$i<=10;$i++){
		echo "For LOOP !!";
		echo "\n";
	}

	#in break
	$user_need = 5;
	for($v=0;$v<=10;$v++){
		echo "BREAK".$v."\n";
		if($v == $user_need){
			break;
		}
	}

	#in CONTINUE
	$skip_value = 5;
	for($B=0;$B<=10;$B++){
		if($B == $skip_value){
			continue;
		}
		echo "CONTINUE".$B."\n";
	}

	#Nested LOOP
	for($A = 1; $A <=3;$A++){
		// echo "$A \n";
		for($B=1;$B<=3;$B++){
			echo"First $A Second $B \n";
		}
	}

