@extends('layout')

@section('content')
    <h2>List User</h2>
    <a href="users/create"><button class="btn btn-primary btn-sm">Add user</button></a><br><br>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('users.edit',$user->id)}}"><button class="btn btn-outline-primary btn-sm">Edit</button></a></td>
                    <td>
                            <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal{{$user->id}}">Delete</button>
                            <!-- Modal -->
                            <div class="modal fade" id="modal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>This user will be delete. Are you sure to continue?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <form action="{{route('users.destroy', $user->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection