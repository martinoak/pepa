<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function output(): JsonResponse
    {
        return response()->json(file_get_contents(config_path('app.php')));
    }
}
