<?php

namespace FizzBuzz;

class FizzBuzz
{
	public function start()
	{
		for($i=1; $i<=100; $i++) {
			if($this->isFizz($i) && $this->isBuzz($i)) {
				echo "FizzBuzz\n";
			}
			elseif($this->isFizz($i)) {
				echo "Fizz\n";
			}
			elseif($this->isBuzz($i)) {
				echo "Buzz\n";
			}
			else {
				echo "$i\n";
			}
		}
	}
	private function isFizz($i)
	{
		return $i % 3 === 0;
	}
	private function isBuzz($i)
	{
		return $i % 5 === 0;
	}
}
