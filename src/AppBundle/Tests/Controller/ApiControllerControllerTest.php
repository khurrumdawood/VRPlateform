<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerControllerTest extends WebTestCase
{
    public function testGetallusers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAllUsers');
    }

}
