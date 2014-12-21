<?php
require './vendor/autoload.php';

function solution($n, $a)
{
	$counters = array_fill(0, $n, 0);

	$oldMax	 = 0;
	$max	 = 0;

	foreach ($a as $k => $op) {
		if ($op <= $n) {

			if ($counters[$op - 1] < $oldMax) {
				$counters[$op - 1] = $oldMax;
			}
			$counters[$op - 1] ++;
			$value = $counters[$op - 1];

			if ($value > $max) {
				$max = $value;
			}
		} else {
			$oldMax = $max;
		}
	}

	for ($i = 0; $i < $n; $i++) {
		if ($counters[$i] < $oldMax) {
			$counters[$i] = $oldMax;
		}
	}

	return $counters;
}


Tester\Assert::equal([3, 2, 2, 4, 2], solution(5, [3, 4, 4, 6, 1, 4, 4]));
