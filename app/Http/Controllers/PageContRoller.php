<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageContRoller extends Controller
{
    public function index()
    {
        $users = [
            'Garsivaz Garsivaz',
            'Ali Soltani',
            'mohsen semsar'
        ];
        return view('index', compact('users'));
    }

    public function about()
    {
        return 'about';
    }

    public function welcome()
    {
        return view('welcome');
    }
}
