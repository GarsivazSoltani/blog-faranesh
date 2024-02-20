@extends('layouts.app')

@section('title', 'لیست مقالات')

@section('content')
    <h1>Index</h1>
    <button>
        <a href="article/create">Add</a>  
    </button><br>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
              <th scope="col">ردیف</th>
              <th scope="col">عنوان</th>
              <th scope="col">منبع</th>
              <th scope="col">ویرایش</th>
              <th scope="col">حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td><a href="article/{{$article->id}}">{{$article->title}}</a></td>
                    <td>{{$article->source}}</td>
                    <td><button>
                        <a href="article/{{$article->id}}/edit">Edit</a>    
                    </button></td>
                    <td>
                        <form action="/article/{{$article->id}}" method="post">
                            @method('delete')
                            @csrf
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection