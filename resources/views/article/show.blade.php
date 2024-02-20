@extends('layouts.app')

@section('title', 'نمایش مقاله')

@section('content')
    <h1>Show</h1>
    <p>id: {{$article->id}}</p><hr>
    <p>title: {{$article->title}}</p><hr>
    <p>body: {{$article->body}}</p><hr>
    <p>source: {{$article->source}}</p>
    <h3><a href="/article">بازگشت</a></h3>
@endsection
