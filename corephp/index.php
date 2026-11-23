<?>
// Hello World
echo "hello";

/*
- Echo case sensitive nahi hota hai.
- Ye output browser par dikhata hai.
- Ye PHP ka ek pre-built function hai.
- Double quotes ("") aur single quotes ('') dono chalte hain.
*/

// Variables wo container (box) hote hain jisme data store hota hai, isme kisi bhi kisam ka data dala ja sakta hai.
$name = "hussain shamim";
$age = 10;
$color = "green";
echo $age;

// HTML in PHP and PHP in HTML
/* Koi bhi HTML tag agar aap echo ke andar "" mein likhenge toh wo chal jayega. */ 
echo "<h1 style='color: red'>hello i am " . $name . "</h1>";
echo "<h1 style='color: red'>hello i am " . $name . "</h1>";
?>

<a href="#" style="color: <?php echo $color; ?>">my age <?php echo $age; ?></a>

<?php
// PHP mein Errors display karna
/* Jab bhi PHP ka default error aata hai toh wo black screen par aata hai. 
Error kya hai yeh screen par dekhne ke liye php.ini file find karni parti hai 
aur wahan display_errors ko ON karna parta hai. */

// Constants in PHP: Kisi value ko store karna jo baad mein update na ho sake.
// Variable = update possible | Constant = sirf pehli dafa define hota hai.
// Constants likhne ke 2 tareeqey hain:

const ali = 'male'; // Pehla tareeqa
// const ali = 'female'; // Error dega
// ali = 'female'; // Error dega

define("classes", 19); // Dusra tareeqa
echo "<br />" . ali;
echo "<br />" . classes;

// Data Types in PHP
/* Data kis type ka hai, PHP mein 8 main data types hoti hain:
- string = 'atoz'
- integer = 110
- float = 10.0
- boolean = true / false
- null = variable mein koi value nahi
- array = multiple data types ek hi variable mein
- object = Object-Oriented Programming ke liye
- resource = DB connection ya external library values store karne ke liye
- var_dump() function variable ki type aur value dono batata hai. */

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
$userAccounts = ['ubl', 1200, true, 'meezan bank', 200, false];
// echo var_dump($userAccounts);
// $userData = new className();

// Conditional Statements in PHP (if-else)
if (5 > 7) {
    echo "yes its enable";
} else {
    echo "not its disable"; // Syntax error yahan theek kiya gaya hai
}

// Array aur foreach loop ki practice
$username = ['ali', 'Bano', 'Chodri', 'Dokra'];
foreach ($username as $user) {
    echo $user . "\n";
}

$a = 10;
echo $a++;
echo $a;
echo ++$a;

echo "\n" . (2 <=> 2); // Spaceship operator returns -1, 0, or 1
echo "\n";

// Conditional Statement (if, elseif, else)
if (20 > 10) {
    echo "yes 20 above 10";
} elseif (10 > 211) {
    echo "yes 10 above 2";
} else {
    echo "nothing";
}

echo "\n";

// Switch Statement
$city = "islamabad";
switch ($city) {
    case "islamabad":
        echo "capital of pk";
        break;

    case "karachi":
        echo "City Of Lite";
        break;

    case "multan":
        echo "city of cent";
        break;

    default:
        echo "no city found";
        break;
}

# Logical Operators
$userClass = 12;
$userAge = 17;
$userRoll = 12;
$userEnroll = 18;

if ($userAge > $userClass && $userEnroll == 18) {
    echo "je ap ess class key liye apply kar skty hen!";
} else {
    echo "you are not eligible";
}

# For Loop
for ($i = 0; $i <= 10; $i++) {
    echo "For LOOP !!";
    echo "\n";
}

# Loop with Break
$user_need = 5;
for ($v = 0; $v <= 10; $v++) {
    echo "BREAK" . $v . "\n";
    if ($v == $user_need) {
        break;
    }
}

# Loop with Continue
$skip_value = 5;
for ($B = 0; $B <= 10; $B++) {
    if ($B == $skip_value) {
        continue;
    }
    echo "CONTINUE" . $B . "\n";
}

# Nested Loop
for ($A = 1; $A <= 3; $A++) {
    for ($B = 1; $B <= 3; $B++) {
        echo "First $A Second $B \n";
    }
}

# While Loop
$count = 1;
while ($count <= 5) {
    echo "The number is: $count <br>";
    $count++; // Increment the counter to avoid an infinite loop
}

# do while Loop
$count = 1;
do {
    echo "Number: $count\n";
    $count++;
} while ($count <= 5);

# do Negative 
$counter = 10;
do {
    echo "Number Minus: $counter\n";
    $counter--;
} while ($counter > 0);

# goto statement 
$name = 'ali';
$age = 20;
if($name == 'ali' or $age == 20){
	echo ("std kei information dee jaa rhi hey ");
	goto abc;
}
echo ("\nbaad ka code");
echo ("\nbaad ka code");
echo ("\nbaad ka code");
echo ("\nbaad ka code");
echo ("\n");
abc:
echo ("$name aike acha larka hey ! wo $age saal ka hey .");

# simple with parameterize function
function printClass($class){
	echo "ye sab $class my hey \n";
}
function printname($nammm,$cls){
	echo "mera name $nammm hey \n";
	printClass($cls);
}
function htmloopp($color,$username){
	echo "<h2 style="color: $color">$username</h2>";
}
printname("ali",10);
printname("Zameer",12);
printname("kaleem",6);

?>
