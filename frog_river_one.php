<?php
require './vendor/autoload.php';

function solution($x, array $a)
{
	if (!in_array($x, $a)) {
		return -1;
	}
	$filledPositions = [];
	foreach ($a as $k => $n) {
		if (!isset($filledPositions[$n])) {
			$filledPositions[$n] = TRUE;
			if (count($filledPositions) === $x) {
				return $k;
			}
		}
	}

	return -1;
}


Tester\Assert::equal(-1, solution(5, [ 1, 3, 1, 4, 2, 3, 4]));
Tester\Assert::equal(6, solution(5, [ 1, 3, 1, 4, 2, 3, 5, 4]));
Tester\Assert::equal(0, solution(1, [1]));

