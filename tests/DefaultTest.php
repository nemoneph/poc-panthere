<?php
namespace App\Tests;

use Panthere\PanthereTestCase;

class DefaultTest extends PanthereTestCase
{
    public function testMyApp()
    {
        $client = static::createPanthereClient(); // Your app is automatically started using the built-in web server
        $crawler = $client->request('GET', static::$baseUri.'/default');

        $this->assertContains('example', $crawler->filter('p')->text());
    }
}