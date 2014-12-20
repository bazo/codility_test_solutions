<?php
require './vendor/autoload.php';

function solution(array $a)
{
	if (empty($a)) {
		return 1;
	}

	sort($a);

	$max = max($a);
	$all = range(1, $max);

	$diff = array_diff($all, $a);
	if (empty($diff)) {
		return $max + 1;
	}

	return current($diff);
}


Tester\Assert::equal(4, solution([2, 3, 1, 5]));
Tester\Assert::equal(1, solution([]));
Tester\Assert::equal(3, solution([2, 4, 1, 5]));
Tester\Assert::equal(3, solution([2, 4, 1, 5, 6]));
Tester\Assert::equal(1, solution([2, 3, 4, 5]));
Tester\Assert::equal(6, solution([1, 2, 3, 4, 5]));
