<!-- logical operator -->

<?php
$userAge = 5;
$secondUserAge = 40;

// logical OR opertaor 
if ($userAge < 2 || $secondUserAge > 50) {
    echo "ham ap ko apni website mey khosh amdeed kehty hen";
} elseif ($userAge === 5) {
    echo "wait karo !!!!!";
} else {
    echo "app hammari website mey in nhi ho sakty hey";
}
// logical OR opertaor 
if ($userAge > 3 && $secondUserAge > 30) {
    echo "wellcome Hussain";
} elseif ($userAge === 40) {
    echo "You Are A Mental Men";
}else{
    echo "So Sorry !";
}

?>