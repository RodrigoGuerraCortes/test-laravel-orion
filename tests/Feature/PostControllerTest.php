<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Orion\Concerns\DisableAuthorization;
use Tests\TestCase;

class PostControllerTest extends TestCase
{
    use DatabaseMigrations;

    public function test_index  ()
    {
        Post::factory()->count(3)->create();

        $response =  $this->get('/api/posts'); //->assertSee($user->name);

        expect($response['data'])->toHaveCount(3);
    }

    public function test_create  ()
    {

        Post::factory()->count(3)->create();

        $data = [ 
            'nombre' => '::nombre::',
        ];

        $response =  $this->postJson('/api/posts', $data); //->assertSee($user->name);
        
        $response->assertStatus(201);
        expect($response['data'])->toContainEqual('::nombre::');

    }
}