<?php
require './vendor/autoload.php';

function solution(array $a)
{
	if (empty($a)) {
		return 1;
	}

	sort($a);

	end($a);
	$max = current($a);
	reset($a);

	$n = $max - 1;

	$i		 = 0;
	$missing = NULL;

	while ($i <= $n) {
		if ($a[$i] !== $i + 1) {
			$missing = $i + 1;
			break;
		}
		$i++;
	}

	if (is_null($missing)) {
		return $max + 1;
	}

	return $missing;
}


Tester\Assert::equal(4, solution([2, 3, 1, 5]));
Tester\Assert::equal(1, solution([]));
Tester\Assert::equal(3, solution([2, 4, 1, 5]));
Tester\Assert::equal(3, solution([2, 4, 1, 5, 6]));
Tester\Assert::equal(1, solution([2, 3, 4, 5]));
Tester\Assert::equal(6, solution([1, 2, 3, 4, 5]));
