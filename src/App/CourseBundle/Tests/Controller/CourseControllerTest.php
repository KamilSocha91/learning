<?php

namespace App\CourseBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CourseControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/course');
    }

    public function testCourse()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/course');
    }

}
