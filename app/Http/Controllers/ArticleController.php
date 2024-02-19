<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->get();
        return view('article.index', compact('articles'));
    }

    public function show()
    {

    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $title = $request->title;
        $body = $request->body;
        $source = $request->source;
        DB::table('articles')->insert([
            'title' => $title,
            'body' => $body,
            'source' => $source
        ]);

        return back();
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
