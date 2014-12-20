<?php
require './vendor/autoload.php';

function solution(array $a)
{
	$count = count($a);

	$sumLeft	 = 0;
	$sumRight	 = array_sum($a);

	if ($count === 1) {
		return $sumRight;
	}

	$minimum = NULL;
	$p		 = 0;
	while ($p + 1 < $count) {
		$current = $a[$p];

		$sumLeft += $current;
		$sumRight -= $current;

		$diff = abs($sumLeft - $sumRight);
		if (is_null($minimum) or $diff < $minimum) {
			$minimum = $diff;
		}
		$p++;
	}

	return $minimum;
}

$a = [3, 1, 2, 4, 3];
Tester\Assert::equal(1, solution($a));

$a = [1000, -1000];
Tester\Assert::equal(2000, solution($a));

$a = [1, -1];
Tester\Assert::equal(2, solution($a));

$a = [1];
Tester\Assert::equal(1, solution($a));

$a = [-10, -5, -3, -4, -5];
Tester\Assert::equal(3, solution($a));
