@extends('layouts.app')

@section('content')
    <small><a href="{{ route('articles.create') }}">Создать статью</a></small>
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <a href="articles/{{ $article->id }}"><h2>{{$article->name}}</h2></a>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection