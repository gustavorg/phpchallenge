<?php

namespace App;


class Contact
{
	public string $name;
	public string $phone;
	public string $phoneCode;
	public string $message;
	
	public function __construct(string $name, string $phone, string $phoneCode, string $message)
	{
		$this->name = $name;
		$this->phone = $phone;
		$this->phoneCode = $phoneCode;
		$this->message = $message;
	}
}