@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>name</th>
            <th>Description</th>
            <th>Category</th>
            <th>IMDB</th>
            <th>Duration</th>
            <th>Quality</th>
            <th>Language</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($messages as $message)
                {{-- {{ $movies->count() }} --}}
                <td>{{$message->id}}</td>
                 <td> <img src="{{ $message->image_message }}" alt="" style="width:90px"></td>
                    <td>{{$message->name}}</td>
                    <td>{{$message->description}}</td>
                    <td>{{$message->category}}</td>
                    <td>{{$message->imdb}}</td>
                    <td>{{$message->duration}}</td>
                    <td>{{$message->quality}}</td>
                    <td>{{$message->language}}</td>
                    <td>
                        <form action="{{ route('messages.destroy',$message->id) }}" method="POST">
                            {{-- <a class="btn btn-warning" href="{{ route('messages.show', $message->id) }}">Show</a> --}}
                            <a class="btn btn-warning" href="{{ route('messages.edit', $message->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>

            </tr>


            @endforeach


        </tbody>
    </table>

</div>
@stop

@section('css')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
    @if(Session::has('messageadded'))
    <script>
        swal("Good job!", "New Message Has Been Deleted!!", "success");
    </script>
@endif
@if(Session::has('messagedeleted'))
    <script>
        swal("Good job!", "Message Has Been Deleted!!", "success");
    </script>
@endif
@if(Session::has('messageupdated'))
    <script>
        swal("Good job!", "Message Has Been Updated Successfully!!", "success");
    </script>
@endif
@stop
