<?php

class core
{
	public function change()
	{
		$a = 2;
		$b = 6;

		$c = $a + $b;

		$d = 5;

		$c = $d + $a;

		return $c;
	}
}
