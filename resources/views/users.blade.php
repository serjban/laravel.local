@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Administration of registered users.</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>ADMIN</th>
                                <th>BAN</th>
                                <th>EDIT</th>
                                <th>DELETE</th>
                            </thead>
                            <tbody>
                        @foreach($users as $user)
                            @if($user->banned)
                                <tr class="danger">
                            @else
                                <tr>
                            @endif
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                @if ($user->isadm)
                                    <td> YES </td>
                                @else
                                    <td> NO </td>
                                @endif
                                @if ($user->banned)
                                    <td> YES </td>
                                @else
                                    <td> NO </td>
                                @endif
                                <td>
                                    <a class="btn btn-default" href="{{ route('userEdit',['id'=>$user->id]) }}" role="button">Edit &raquo;</a>
                                </td>
                                <td>
                                    <form action="{{ route('userDelete',['user' => $user->id])}}" method="post">
                                        {{method_field('DELETE')}}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                            </tbody>
                        </table>
                        {{--Something Must be here...--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection