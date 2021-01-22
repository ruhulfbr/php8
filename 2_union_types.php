<?php

	class Users
	{
		
		public $number;

		public function setNumber(int|string|float $number){
			$this->number = $number;
		}

		public function getNumber(): string|int|float{
			return $this->number;
		}	
	}


	$users = new Users();
	$users->setNumber("There is an error");
	$users->setNumber(63.85);
	echo $users->getNumber();

?>