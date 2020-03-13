<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Homepagetest extends TestCase
{
    /** @test */
    function it_shows_the_homepage()
    {
        $this->withoutExceptionHandling();

        $response $this->get('/');

        $response->assertsuccessful();
    }
}
