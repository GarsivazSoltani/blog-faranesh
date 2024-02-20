@extends('layouts.app')

@section('title', 'ایجاد مقاله')
    
@section('content')
    <h1>Create</h1>
    <form action="../article" method="POST">
        @csrf
        title: <input type="text" name="title"><br><br>
        body: <textarea name="body" id="" cols="30" rows="10"></textarea><br><br>
        source: <input type="text" name="source"><br><br>
        <select name="categories[]" id="" multiple>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
        <input type="submit">
    </form>
    <h3><a href="/article">بازگشت</a></h3>
@endsection
