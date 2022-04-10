<?php

namespace App;

use App\Contact;
use App\Call;
use App\Interfaces\CarrierInterface;
use App\Services\ContactService;


class Mobile implements CarrierInterface
{
	public function makeCallByName($name = '')
	{
		if( empty($name) ) return;

		$contact = ContactService::findByName($name);
		if(!ContactService::validateNumber($contact[2])){
			return null;
		}
		return $this->makeCall();
	}

	public function dialContact(Contact $contact){

		return $this->makeCall();
	}

	public function makeCall(){
		// code twilio
		return new Call();
	}

}
