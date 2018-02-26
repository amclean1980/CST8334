<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesLoadTest extends TestCase
{
    /**
     * Tests if all the pages of the website load.
     *
     * @return void
     */
    public function testPageLoad()
    {
        // MainPage
        $response = $this->get('/');
        $response->assertStatus(200);

        // homepage
        $response = $this->get('/homepage');
        $response->assertStatus(200);

        // Contact
        $response = $this->get('/contact');
        $response->assertStatus(200);

        // login
        $response = $this->get('/login');
        $response->assertStatus(200);

        //checks to make sure you can't access profile pages
        //without logging in
        $response = $this->get('/profile');
        $response->assertStatus(500);



        // Tests if the page loads proper texts

    }
}
