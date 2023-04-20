@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>All Users</h1>
@stop

@section('content')

<table class="table table-primary table-bordered table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Photo</th>
        <th scope="col">Roles</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($users as $user)
        <td>{{$user->id }}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->lname}}</td>
        <td>{{$user->email}}</td>
        <td><img src="{{ asset('images/' .$user->user_image) }}" alt="" style="width:150px"></td>

        <td>
            @foreach ($user->roles as $role)
                {{ $role->name }}
            @endforeach
        </td>
        <td>
            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
            <a class="btn btn-warning" href="{{ route('users.edit', $user->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{ $users->links("pagination::bootstrap-4") }}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 150px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
    </style>
@stop

@section('js')

    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
    @if(Session::has('userdeleted'))
    <script>
swal("Good job!", "User Has Been Deleted!!", "success");
    </script>
    @endif
    @if(Session::has('userupdate'))
    <script>
swal("Good job!", "New User Has Been Added Successfully!!", "success");
    </script>
    @endif
@stop
