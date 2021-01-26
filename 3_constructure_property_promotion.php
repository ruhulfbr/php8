<?php

	class Users
	{

		public function __construct(public string $name, public string $email, public int $phone){
			//Code goes here
		}

		public function get(){
			return ['name'=>$this->name, 'email'=>$this->email, 'phone'=>$this->phone];
		}
	}

	$users = new Users('ruhul', 'ruhul email', 25485487);

	echo "<pre>";
	print_r($users->get());

?>