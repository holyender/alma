<?php


class SignupCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
	$tmp = (string)rand(1,900000);
	$I->amOnPage('/register');
	$I->fillField('#email','Jinjin'.$tmp.'@gmail.com');
	$I->fillField('#password','testtestpassword');
	$I->fillField('#first','testregisterfirst');
	$I->fillField('#last','testregisterlast');
	$I->wait(10);
	$I->click('Submit your application');
	$I->wait(10);
    }
}
