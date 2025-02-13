<?php

declare(strict_types=1);

namespace App\Tests\Functional\Base;

use Codeception\Util\HttpCode;
use App\Tests\Support\FunctionalTester;

final class ExampleTestCest
{
    public function seeBaseResponse(FunctionalTester $I): void
    {
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendGet('/api/example');

        $I->seeResponseCodeIs(HttpCode::OK);
    }
}
