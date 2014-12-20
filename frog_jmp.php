<?php
require './vendor/autoload.php';

function solution($x, $y, $d)
{
	$distance = $y - $x;

	return (int) ceil($distance / $d);
}


Tester\Assert::equal(3, solution(10, 85, 30));
Tester\Assert::equal(3, solution(500000000, 900000000, 150000000));
