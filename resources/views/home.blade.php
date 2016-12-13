@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hello, {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    @if (Auth::user()->isadm)
                        <li><a href="{{ url('/users') }}">Edit Users</a></li>
                        <li><a href="{{ url('/articles') }}">Edit Articles</a></li>
                    @else
                        <li><a href="{{ url('/articles') }}">View articles</a></li>
                        <li><a href="{{ url('/createArticle') }}">Add article</a></li>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
