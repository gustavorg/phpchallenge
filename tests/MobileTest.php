<?php

namespace Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use App\Mobile;

class MobileTest extends TestCase
{
	
	/** @test */
	public function it_returns_null_when_name_empty()
	{
		$mobile = new Mobile();
		$this->assertNull($mobile->makeCallByName(''));
	}

	/** @test2 */
	public function it_returns_data_when_name_exist()
	{
		$mobile = new Mobile();
		$this->assertNotEmpty($mobile->makeCallByName('gustavo'));
	}

	/** @test3 */
	public function it_send_message_when_new_contact()
	{
		$mobile = new Mobile();
		$contact = new Contact("test","963008482","51","Hi new contact");
		$this->assertNotEmpty($mobile->dialContact($contact));
	}

	/** @test3 */
	public function it_send_message_when_exist_contact()
	{
		$mobile = new Mobile();
		$contact = new Contact("gustavo","957086613","51","Hi exist contact");
		$this->assertNotEmpty($mobile->dialContact($contact));
	}
}
