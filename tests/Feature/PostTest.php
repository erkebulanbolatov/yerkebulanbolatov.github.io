<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_post_id_get_request()
    {
        $response = $this->get('/post/58');
        $response->assertStatus(200);
    }

    public function test_get_unexisted_client()
    {
        $response = $this->get('/post/1000');
        $response->assertStatus(404);
    }

    public function test_post_response()
    {
        $response = $this->get('/post/58');
        $response->assertViewHas('post');
    }
}
