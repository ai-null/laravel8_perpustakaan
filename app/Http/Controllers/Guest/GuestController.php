<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('index');
    }

    public function contacts(Request $request)
    {
        return view('contacts');
    }
}