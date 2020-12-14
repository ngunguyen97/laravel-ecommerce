<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewLandingPageTest extends TestCase
{
    /** @test */
    public function landing_page_loads_correctly() {
      $response = $this->get('/');

      //Assert
      $response->assertStatus(200);
      $response->assertSee('Laravel Ecommerce');
      $response->assertSee('Includes multiple products');
    }
}    