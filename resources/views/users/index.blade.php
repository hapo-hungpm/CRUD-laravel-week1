@extends('layout')

@section('content')
    <h2>List User</h2>
    <a href="{{ route('users.create') }}"><button class="btn btn-primary btn-sm">Add user</button></a><br><br>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="{{ route('users.edit',$user->id) }}"><button class="btn btn-outline-primary btn-sm">Edit</button></a></td>
                    <td>

                        <form action = "{{ route('users.destroy', $user->id)}}" method="POST" class="delete-form{{ $user->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm btn-delete"
                                    data-toggle="modal" data-target="#modal" type="button" value="{{ $user->id }}">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $users->links() }}
    </div>
    <div class="container">

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <button type="submit" class="btn btn-danger btn-summit-delete">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(".btn-delete").click(function () {
               let idUser = $(this).val();
                $(".btn-summit-delete").click(function () {
                    $(`.delete-form${idUser}`).submit();
                });
            });
        });
    </script>

@endsection