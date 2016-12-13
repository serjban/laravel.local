@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$article->title}}</h1>
    {{$article->content}}
    <hr/>
    @if (Auth::user()->isadm)
        <a class="btn btn-primary" href="{{ route('editArticle',['id'=>$article->id]) }}" role="button">Edit &raquo;</a>
        <a class="btn btn-danger" href="{{ route('deleteArticle',['id'=>$article->id]) }}" role="button">Delete &raquo;</a>
    @else
        <a class="btn btn-primary" href="{{ url('articles') }}" role="button">back &raquo;</a>
    @endif

</div>

@endsection