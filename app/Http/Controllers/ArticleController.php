<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        // $articles = DB::table('articles')->get();
        $articles = Article::paginate(4);
        // dd($articles);
        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        // $article = DB::table('articles')->find($id);
        $article = Article::find($id);
        return view('article.show', compact('article'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // $title = $request->title;
        // $body = $request->body;
        // $source = $request->source;
        // DB::table('articles')->insert([
        //     'title' => $title,
        //     'body' => $body,
        //     'source' => $source
        // ]);

        $article = new Article();
        $article->title = $request->title;
        $article->body = $request->body;
        $article->source = $request->source;
        $article->save();

        $article->categories()->sync($request->categories);

        return back();
    }

    public function edit($id)
    {
        // $article = DB::table('articles')->find($id);
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        // $title = $request->title;
        // $body = $request->body;
        // $source = $request->source;
        // DB::table('articles')->where('id', $id)->update([
        //     'title' => $title,
        //     'body' => $body,
        //     'source' => $source
        // ]);

        $article = Article::find($id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->source = $request->source;
        $article->save();

        return redirect('/article');
    }

    public function destroy($id)
    {
        // $article = db::table('articles')->where('id', $id)->delete();
        $article = Article::find($id)->delete();
        return back();
    }

    public function storeComment(Request $request, $articleId)
    {
        $article = Article::find($articleId);
        $article->comments()->create([
            'author' => $request->author,
            'body' => $request->body
        ]);
        $article->save();

        return back();
    }
}
