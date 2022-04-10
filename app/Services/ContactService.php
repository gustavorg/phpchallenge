<?php

namespace App\Services;

use App\Configs\Database;
use App\Contact;

class ContactService
{
	public static function findByName($name)
	{
		$conn = new Database();
		$conn->connect();
		$contact = $conn->select("contacts","*", "name = '".$name."'");
		if(!$contact) {
			return null;
		}

		//Get Contact
		$res = $contact->fetch_row();
		return $res;
	}

	public static function validateNumber(string $number): bool
	{
		return preg_match('/^([0-9]*)$/', $number);
	}
}