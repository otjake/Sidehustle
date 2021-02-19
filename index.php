<?php
$prefix="0";
//200 numbers
for ($j =1; $j<=200; $j++) {

    //getting random numbers 12 digits long
    $input= rand(0,pow(10,12)-1);

    //counting number lenght
    $count = $input !== 0 ? floor(log10($input) + 1) : 1;

    //if its not up to 12 add a 0 $prefix, some recharge cards start with 0

    for ($i = $count + 1; $i <= 12; $i++) {

        $input = $prefix . $input;
    }
    //output
    echo "(".$j.") ". $input;
    echo "<hr>";
    echo "<br>";

}
?>
