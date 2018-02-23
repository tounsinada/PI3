<?php

namespace AllForKids\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReservationControllerTest extends WebTestCase
{
    public function testAjoutreservation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AjoutReservation');
    }

}
