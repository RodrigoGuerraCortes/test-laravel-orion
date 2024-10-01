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
        $this->actingAs($user = User::factory()->create());

        Post::factory()->count(3)->create();

        $response =  $this->actingAs($user = User::factory()->create())->get('/api/posts'); //->assertSee($user->name);

        expect($response['data'])->toHaveCount(3);
    }
}