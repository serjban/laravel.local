@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach($articles as $article)
                <li><a href="/showArticle/{{$article->id}}">{{$article->title}}</a></li>
            @endforeach
            <hr>
            <a class="btn btn-primary" href="{{ url('home') }}" role="button">back &raquo;</a>
        </ul>
    </div>
@endsection