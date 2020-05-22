<?php

namespace tests;

use DHLClient\Client;
use DHLClient\Model\getVersionResponse;

class ClientTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function it_should_return_api_version()
    {
        $client = new Client(null, null, 'https://sandbox.dhl24.com.pl/webapi2');
        $response = $client->getVersion();

        $this->assertInstanceOf(getVersionResponse::class, $response);
        $this->assertNotNull($response->getGetVersionResult());
    }
}
