@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="form-horizontal" method="POST" action='/updateArticle/{{$article->id}}'>
            <label class="control-label">Article handle</label>
            <input type="text" class="form-control"  name="title" value="{{$article->title}}">
            <label class="control-label">Content</label>
            <textarea name="content" class="form-control" >{{$article->content}}</textarea>
            {{csrf_field()}}
            <input class="btn btn-primary" type="submit" value="Approve change">
        </form>
    </div>
@endsection