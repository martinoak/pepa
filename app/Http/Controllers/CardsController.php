<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CardsController extends Controller
{
    public function index(): View
    {
        return view('cards');
    }
}
