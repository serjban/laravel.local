@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit parameters of user </div>
                    <div class="panel-body">
                        {{--{!! Form::open(['url' => 'user/update','method' => 'put']) !!}--}}
                        <form action="{{ route('userUpdate',['id' => $user->id, ])}}" method="post">
                            <table class="table table-striped">
                                <thead>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>ADMIN</th>
                                    <th>DISABLE</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="name" value="{{$user->name}}">
                                        </td>
                                        <td>
                                            <input type="text" name="email" value="{{$user->email}}">
                                        </td>
                                        <td>
                                        <input type="checkbox" name="isadmin" @if ($user->isadm) checked @endif>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="banned" @if ($user->banned) checked @endif>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-success">
                                UPDATE
                            </button>
                        </form>
                        {{--{!! Form::close() !!}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection