<?php
include_once 'Stack.php';

$runStack = new Stack();
$runStack->push(3);
$runStack->push(11);
$runStack->push(7);
$runStack->push(8);
$runStack->push(5);

$runStack->pop();
$runStack->pop();

$runStack->push('ht');
$runStack->push('tv');

var_dump($runStack->isEmpty());

$runStack->pop();
$runStack->pop();
$runStack->pop();
$runStack->pop();

var_dump($runStack->isEmpty());

