<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OutputController extends Controller
{
    public function submit(Request $request): JsonResponse
    {
        return response()->json([
            'message' => 'success',
            'data' => $request->all()
        ]);
    }
}
