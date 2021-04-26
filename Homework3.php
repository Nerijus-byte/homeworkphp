<?php
//Išvesti į ekraną 10 kartų žodį 'Labas';

for ($i = 0; $i < 10; $i ++)
{
    echo "Hello" . "<br>";
}

//Išvesti į ekraną skaičius nuo 1 iki 10;

for ($i = 1; $i <= 10; $i++)
{
    echo $i . "<br>";
}

//Išvesti į ekraną skaičius nuo 10 iki 1;

for ($i = 10; $i >= 1; $i--)
{
    echo $i . "<br>";
}

//Išvesti į ekraną visus lyginius skaičius nuo 1 iki 100;

for ($i = 1; $i <= 100; $i++)
{
    if($i % 2 == 0){
        echo $i . "<br>";
    }
}

//Išvesti į ekraną visus masyvo elementus (skaičiu masyvas);

$someNumbers = [1,2,3,4,5];
var_dump($someNumbers);
echo "<br>";

//Išvesti į ekraną visų masyvo elementų sumą.;

$someNumbers = [1,2,3,4,5];
echo array_sum($someNumbers);
echo "<br>";

//Išvesti į ekraną visų masyvo elementų sandaugą.

$someNumbers = [1,2,3,4,5];
echo array_product($someNumbers);
echo "<br>";

//Išvesti į ekraną kas antrą masyvo elementą;

$someNumbers = [1,2,3,4,5];
for ($i = 0; $i < count($someNumbers); $i += 2){
    echo $someNumbers[$i];
}
echo "<br>";

//Funkciją, kuri apverstų masyvo elementus;

function rev(array $x){
   $rever = array_reverse($x);
   return($rever);
}
var_dump(rev([1,2,3,4]));
echo "<br>";

//Sukurti Fibonacci seką(tai tokia seka, kuomet sekantis skaičius yra sudedamas su prieš tai einančiu.)

function Fibonacci($n){

    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}

// Driver Code
$n = 20;
Fibonacci($n);
echo "<br>";

//Išvesti visų masyvo elementų vidurkį;(foreach)

$myArray = [87,75,93,95];

foreach($myArray as $value){
    $avg = array_sum($myArray) / count($myArray);
}

echo $avg;
echo "<br>";

//Išvesti automobilis masyvą į ekraną; (dvilypis masyvas);

$car = array(["a","u","t","o","m","o","b","i","l","i","s"]);

var_dump($car);
