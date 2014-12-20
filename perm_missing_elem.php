<?php
require './vendor/autoload.php';

function solution(array $a)
{
	$count = count($a);
	array_push($a, 0);

	$sum = array_sum($a);

	$expectedSum = (((3*$count) + pow($count, 2)) / 2) + 1;

	return (int) abs($sum - $expectedSum);
}


Tester\Assert::equal(4, solution([2, 3, 1, 5]));
Tester\Assert::equal(1, solution([]));
Tester\Assert::equal(3, solution([2, 4, 1, 5]));
Tester\Assert::equal(3, solution([2, 4, 1, 5, 6]));
Tester\Assert::equal(1, solution([2, 3, 4, 5]));
Tester\Assert::equal(6, solution([1, 2, 3, 4, 5]));