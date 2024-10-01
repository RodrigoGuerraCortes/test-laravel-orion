<?php

use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;
use App\Http\Controllers\Api\PostController;

Orion::resource('posts', PostController::class);