<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        return $request->name . ' | ' . $request->email;
    }
}
