<?php
#1
/* Imagine a lot of code here */
 $very_bad_unclear_name = "15 chicken wings";

 // Write your code here:

$order =&$very_bad_unclear_name;
$order .=" hot";
// Don't change the line below
 echo "\n Your order is: $very_bad_unclear_name.";
 echo "\n";
#2 числа
echo "<br><b>task 2 - numbers</b><br>";
 $var1=54321;
 echo "$var1 \n";
 $float1 = 1.22131;
 echo "\n";
 echo $float1;
echo "\n";
 echo(10+2);

 $lastMonth = 1187.23;
 $thisMonth =1089.98;
 $difference =$lastMonth - $thisMonth;
 echo "\n $difference";
 #11 умножение и деление
echo "<br>";
echo "<br><b>task 11 - multiplication and division</b><br>";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages ;
echo "\n $days_per_language \n";
#12 степень
echo "<br>";
echo "<br><b>task 12 - exponentiation</b><br>";
echo 8**2;
#13 Оператор присвоения
echo "<br>";
echo "<br><b>task 13 - assignment operators</b><br>";

$my_num = 12345;
$answer = $my_num;
$answer +=2;
$answer *=2;
$answer -=2;
$answer /=2;
$answer = $answer - $my_num;
echo $answer;
#14 Математические функции
echo "<br>";
echo "<br><b>task 14 - mathematical functions</b><br>";
$a = 10;
$b = 3;
$remainder = $a % $b;
echo "\n $remainder";

$c=12;
$d=11;
$f=$c%$d;
if ($f>0)
    echo "\n делится с остатком: $f \n";
else
    echo "делится" ($c/$d) ;
$st =2**10;
$sum=null;
$sqrt=sqrt(245);
$array=[4,2,5,19,13,0,10];
foreach ($array as $value)
    $sum +=$value**2;
echo sqrt($sum);

$G=sqrt(379);
echo "\n";
echo  round($G);
echo "\n";
echo round($G,1);
echo "\n";
echo round($G,2);

$G=sqrt(587);
$array=['ceil'=>ceil($G), 'floor'=>floor($G)];

$array2=[4,-2, 5, 19, -130, 0, 10];
$min=min($array2);
$max=max($array2);
echo "\n";
echo "Min :" .$min;
echo "\n";
echo "Max :" .$max;

echo "\n";
$i= rand(0,100);
echo "\n";
echo $i;
$array3=[];


for ($i = 0; $i < 10; $i++)
    $array3[] = rand(1, 100);
$a = rand(0,20);
$b = rand(0,30);
$c = abs($a-$b);

$numbers=[];
$newNumb=[];
for($i=0;$i<5;$i++)
    $numbers[] = rand(-50,50);
for($i=0;$i<count($numbers);$i++)
    $newNumb[] = abs($numbers[$i]);

$a = 30;
$array4=[];

for($i = 1;$i<=$a;$i++)
    if(($a % $i) == 0)
        $array4[]=$i;

echo "\n";

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;

foreach ($array as $value) {
    $sum += $value;
    $count++;

    if ($sum > 10) {
        break;
    }
}
echo "Количество :". $count;
#15 Функции
echo "<br>";
echo "<br><b>task 15 - functions</b><br>";
function printStringReturnNumber($str) {
    echo $str . "\n";
    return strlen($str);
}
$string ="Php";
$my_nun=printStringReturnNumber($string);
echo"Длинна :". $my_nun . "\n";

#16 Функции
echo "<br>";
echo "<br><b>16 - functions (continuation)</b><br>";
function increaseEnthusiasm($str)
{
    $str=$str. "!";
    return ($str);
}
$a="qwerty";
echo increaseEnthusiasm($a)."\n";
function repeatThreeTimes($str){
    $str= "$str$str$str";
    return($str);


}
$b="Java";
echo repeatThreeTimes($b);
$c="C++";
echo "\n";
echo (repeatThreeTimes(increaseEnthusiasm($c)));

function cut ($string, $symbolsLeft = 10){
    $result = '';
    for ($i=0; $i<$symbolsLeft; $i++){
        $result .= $string[$i];
    }
    echo $result;
}

function printArrayElementsRecursively($array, $index) {
    if ($index < count($array)) {
        echo $array[$index] . " ";
        printArrayElementsRecursively($array, $index + 1);
    }
}

// Пример использования
$array = [5, 1, 2, 43, 5];
printArrayElementsRecursively($array, 0);
function sumOfNumbers($number)
{
    $stringNumber = strval($number);

    $sum = $stringNumber[0] + $stringNumber[1];
    $newsum = $sum;
    if ($sum > 9) {
        return sumOfNumbers($newsum);
    }
    else{
        return $newsum;
    }
}
#17
echo "<br>";
echo "<br><b>task 17 - arrays</b><br>";
$length = 5;
$result = array();

for ($i = 1; $i <= $length; $i++) {
    $result[] = str_repeat('x', $i);
}
echo print_r($result) . "<br>";

function arrayFill($value, $numOfElements){
    $currentArray=array();
    for ($i=0; $i<$numOfElements; $i++)
        array_push($currentArray, "$value");
    return $currentArray;
}
$arrayTest = array(arrayFill("Z", 8));
echo print_r($arrayTest)."<br>" ;
$arrayForCounting = array(array(1, 2, 3), array (4, 5), array(6));
$sum = 0;
foreach ($arrayForCounting as $row) {
    foreach ($row as $column)
        $sum += $column;
}
echo "sum: " . $sum."<br>";
$val=1;
$arrayToTen = array(array());
for($i=0; $i<3; $i++)
    for($j=0; $j<3; $j++){
        $arrayToTen[$i][$j]=$val;
        $val++;
    }
echo print_r($arrayToTen) . "<br>";
$array = [2, 5, 3, 9];
$result = ($array[0] * $array[1]) + ($array[2] * $array[3]);

echo "Результат: $result"."<br>";
$user = ["name"=>"Patrick",
    "surname"=>"Bateman",
    "patronymic"=>"Hammer"];
echo $user["surname"] . " " . $user["name"] . " " . $user["patronymic"] . "<br>";

$date = ["year"=>"2024",
    "month"=>"March",
    "day"=>"20"];
echo $date["year"] . "-" . $date["month"] . "-" . $date["day"] . "<br>";
$arr = ['a', 'b', 'c', 'd', 'e'];
$count = 0;
foreach ($arr as $value)
    if ($value != NULL)
        $count++;
echo "Число: " . $count . "<br>";

$arr = ['a', 'b', 'c', 'd', 'e'];
$numberOfElements = count($arr);
echo "Последний: " . $arr[$numberOfElements-1] . "<br>" . "Предпоследний: " . $arr[$numberOfElements-2] . "<br>";
echo "<br>";
echo "<br><b>task 18 - if/else</b><br>";
#18
function checkSum($num1, $num2) {
    $sum = $num1 + $num2;
    if ($sum > 10) {
        return true;
    } else {
        return false;
    }
}

$num1 = 5;
$num2 = 7;
echo checkSum($num1, $num2)."<br>";
function equal ($one,$two){
    if ($one === $two)
        return true;
    else
        return false;
}
echo equal(20,20) . "<br>";
$test = 0;
echo ($test == 0) . "<br>";
function age($number) {
    $sum = 0;
    while ($number != 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum;
}

$age = 56;

if ($age < 10 || $age > 99) {
    echo "Число не попадает в диапазон от 10 до 99.";
} else {
    $sum = age($age);

    if ($sum <= 9) {
        echo "Сумма цифр числа $age однозначна."."<br>";
    } else {
        echo "Сумма цифр числа $age двузначна."."<br>";
    }
}
$arr = [1, 2, 3];
if (count($arr) == 3) {
    echo array_sum($arr);
}

echo "<br>";
echo "<br>";
#19
echo "<br><b>task 19 - loops</b><br>";
for ($i = 1; $i <= 20; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "x";
    }
    echo "<br>";
}
#20
echo "<br>";
echo "<br><b>task 20 - function combinations</b><br>";
$numbers = [5, 10, 15, 20, 25];
$average = array_sum($numbers) / count($numbers);

echo "Среднее арифметическое: " . $average."<br>";
$n = 100;
$sum = $n * ($n + 1) / 2;
echo  $sum."<br>";
$numbers = [4, 9, 16, 25, 36];
$square = array_map(function($num) {
    return sqrt($num);
}, $numbers);

// Выводим результат
print_r($square)."<br>";
$letters = range('a', 'z');
$numbers = range(1, 26);
$result = array_combine($letters, $numbers);
print_r($result)."<br>";
$string = '1234567890';
$numbers = str_split($string, 2);

$sum = array_sum(array_map('intval', $numbers));


echo "<br>".$sum;















































    



















