@extends('layouts.app')

@section('title', 'نمایش مقاله')

@section('content')
    <h1>Show</h1>
    <p>id: {{$article->id}}</p><hr>
    <p>title: {{$article->title}}</p><hr>
    <p>body: {{$article->body}}</p><hr>
    <p>source: {{$article->source}}</p>
    <h3><a href="/article">بازگشت</a></h3>
    <hr>
    categories: <br>
    <ul>
        @foreach ($article->categories as $category)
            <li>{{$category->title}}</li>
        @endforeach
    </ul>
    <hr>
    <h1>Enter Your Comment:</h1><br>
    <form action="{{$article->id}}/comment" method="POST">
        @csrf
        enter your name: <input type="text" name="author"><br><br>
        enter your comment: <textarea name="body" id="" cols="30" rows="10"></textarea><br><br>
        <input type="submit">
    </form>
    <hr>
    comments: <br>
    <ul>
        @foreach ($article->comments as $comment)
            <li>{{$comment->author}} | {{$comment->body}}</li>
        @endforeach
    </ul>
    <h3><a href="/article">بازگشت</a></h3>
@endsection
