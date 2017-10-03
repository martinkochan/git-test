<?php

class core
{
	public function change()
	{
		$a = 1;
		$b = 10;

		$c = $a + $b;

		$d = 3;

		$c = $d + $a;

		return $c;
	}
}
