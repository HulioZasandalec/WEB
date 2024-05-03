<?php
echo 'Task 1.a'."<br>";
$text = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a[a-z]{2}b/', $text, $matches);
print_r($matches);

echo "<br>".'Task 1.b'."<br>";

$text= 'a1b2c3';
$result = preg_replace_callback('/[0-9]+/', function($match) {return $match[0] ** 3;}, $text);
echo $result;
