<?php
require './vendor/autoload.php';

function solution(array $a)
{
	$count = count($a);

	if ($count === 1) {
		return 0;
	}

	sort($a);
	for ($i = 1; $i <= $count; $i++) {
		if ($i !== (int) $a[$i - 1]) {
			return 0;
		}
	}

	return 1;
}


Tester\Assert::equal(1, solution([4, 1, 3, 2]));
Tester\Assert::equal(0, solution([4, 1, 3]));
Tester\Assert::equal(1, solution([1]));
Tester\Assert::equal(1, solution([1000000000]));
Tester\Assert::equal(0, solution([1, 1000000000]));
Tester\Assert::equal(1, solution(range(1, 100000)));
