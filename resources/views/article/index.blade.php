@extends('layouts.app')

@section('title', 'لیست مقالات')

@section('content')
    <h1>Index</h1>
    <table border="1" cellpadding="10">
        @foreach ($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->source}}</td>
            </tr>
        @endforeach
    </table>
@endsection