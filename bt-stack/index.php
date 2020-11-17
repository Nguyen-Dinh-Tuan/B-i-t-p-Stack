<?php
include_once ('Stack.php');
$myBooks = new Stack(10);

$myBooks->push('A Dream of Spring');
$myBooks->push('The Winds of Winter');
$myBooks->push('A Dance with Dragons');
$myBooks->push('A Feast for Crows');
$myBooks->push('A Storm of Swords');

echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";
$myBooks->push('A Clash of Kings');
$myBooks->push('A Game of Thrones');
echo $myBooks->isEmpty();

echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";
echo $myBooks->pop()."<br>";

echo $myBooks->isEmpty();