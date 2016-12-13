@extends('layouts.app')
@section('content')
    <div class="container">
        <form class="form-horizontal" method="POST" action='/storeArticle'>
            <label class="control-label">Article header</label>
            <input type="text" class="form-control"  name="title">
            <label class="control-label">Content</label>
            <textarea class="form-control" name="content"></textarea>
            {{--<input type="hidden" value="{{csrf_field()}}">--}}
            {{ csrf_field() }}
            <input class="btn btn-primary" type="submit" value="Create">
        </form>
    </div>
@endsection