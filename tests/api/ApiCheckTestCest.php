<?php


class ApiCheckTestCest
{
    public function _before(ApiTester $I)
    {
    }

    public function _after(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {

        $I->wantTo('create a user via API');
        $I->sendGET('create', ['name' => 'mega']);
        $I->seeResponseContainsJson(['success' => true]);
        /*
        $I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');

        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->seeResponseContains('{"success":"true"}');
        */
    }
}
