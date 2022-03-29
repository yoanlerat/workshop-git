<?php

class Calcul implements Stringable
{
	private float $result = 0;

	public function add(float $number1, float $number2): void
	{
		$this->result = $number1 + $number2;
	}

	public function sub(float $number1, float $number2): void
	{
		$this->result = $number1 - $number2;
	}

	public function __toString()
	{
		return (string) $this->result."\n";
	}
}

$obj = new Calcul();
$obj->add(5, 13.2);
echo $obj;
$obj->sub(12, 45.7);
echo $obj;
