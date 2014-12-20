<?php
require './vendor/autoload.php';

function solution($a)
{
	sort($a);
	$min = 1;
	foreach ($a as $n) {
		if ($n === $min) {
			$min++;
		}
	}

	return $min;
}


Tester\Assert::equal(1, solution([-2147483648, 2147483648]));
Tester\Assert::equal(1, solution([-10, -20]));
Tester\Assert::equal(1, solution([0]));
Tester\Assert::equal(2, solution([1, 1, 1, 1, 1, 1]));
Tester\Assert::equal(5, solution([1, 3, 6, 4, 1, 2]));

