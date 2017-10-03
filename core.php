<?php

class core
{
	public function change()
	{
		$a = 2;
		$b = 3;

		$c = $a + $b;

		$d = 5;

		$c = $d + $a;

		return $c;
	}
}
