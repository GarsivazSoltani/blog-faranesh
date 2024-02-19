@extends('layouts.app')

@section('title', 'ویرایش مقاله')

@section('content')
    <h1>Edit</h1>
    <form action="../{{$article->id}}" method="POST">
        {{method_field('put')}}
        @csrf
        title: <input type="text" name="title" value="{{$article->title}}"><br><br>
        body: <textarea name="body" id="" cols="30" rows="10">{{$article->body}}</textarea><br><br>
        source: <input type="text" name="source" value="{{$article->source}}"><br><br>
        <input type="submit">
    </form>
@endsection