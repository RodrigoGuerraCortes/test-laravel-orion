<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Orion\Concerns\DisableAuthorization;
use Orion\Http\Controllers\Controller;

class PostController extends Controller
{
    use DisableAuthorization;

    protected $model = Post::class; 

}
