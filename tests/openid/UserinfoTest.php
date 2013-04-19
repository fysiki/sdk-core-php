<?php

/**
 * Test class for Userinfo.
 *
 */
class UserinfoTest extends PHPUnit_Framework_TestCase {
	

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
	}
	
	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}
	

	/**
	 * @test
	 */
	public function testSerializationDeserialization() {
		$user = new Userinfo();
		$user->setAccountType("PERSONAL")->setAgeRange("20-30")->setBirthdate("1970-01-01")
			->setEmail("me@email.com")->setEmailVerified(true)
			->setFamilyName("Doe")->setMiddleName("A")->setGivenName("John")
			->setLocale("en-US")->setGender("male")->setName("John A Doe")
			->setPayerId("A-XZASASA")->setPhoneNumber("1-408-111-1111")
			->setPicture("http://gravatar.com/me.jpg")
			->setSub("me@email.com")->setUserId("userId")
			->setVerifiedAccount(true)->setZoneinfo("America/PST");
		
		$userCopy = new Userinfo();
		$userCopy->fromJson($user->toJSON());
		
		$this->assertEquals($user, $userCopy);
	}
}