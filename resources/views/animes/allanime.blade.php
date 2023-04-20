@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>All Animes</h1>
@stop

@section('content')
@if($animes[0]->special==true)
<a href="{{ route('disabelanime') }}"> Disable Special Server</a>
    @else
    <a href="{{ route('enableanime') }}"> Enable Special Server</a>
@endif
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Anime Image</th>
        <th>Anime Poster</th>
        <th>Anime Name</th>
        <th>Types</th>
        <th>User Name</th>
        <th>IMDB</th>
        <th>Visible</th>
        <th>Top</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach ($animes as $anime)
        <td>{{$anime->id}}</td>
         <td> <img src="{{ $anime->image_anime }}" alt="" style="width:90px"></td>
         <td> <img src="{{ $anime->poster_anime }}" alt="" style="width:90px"></td>
            <td>{{$anime->anime_name}}</td>
                            <td>
                    @forelse($anime->types as $type)
                        {{ $type->type }}
                        @empty
                        <p>NO Type</p>
                    @endforelse
                </td>
            <td>{{$anime->user_name}}</td>
            <td>{{$anime->imdb}}</td>
            <td>
                <label class="switch">
                <input data-id="{{$anime->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $anime->status ? 'checked' : '' }}>
                <span class="slider round"></span>
                </label>
            </td>
            <td>
                <label class="switch">
                <input data-id="{{$anime->id}}" class="top-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $anime->top ? 'checked' : '' }}>
                <span class="slider round"></span>
                </label>
            </td>
            <td>
                <form action="{{ route('animes.destroy',$anime->id) }}" method="POST">
                    <a class="btn btn-success" href="{{ route('addserieanime', $anime->id) }}">Add Season</a>
                    <a class="btn btn-primary" href="{{ route('allseasonanime', $anime->id) }}">Show Seasons</a>
                    <a class="btn btn-info" href="{{ route('showanime', $anime->id) }}">Show</a>
                    <a class="btn btn-warning" href="{{ route('animes.edit', $anime->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>

    </tr>


    @endforeach
    </tbody>
</table>
@stop

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
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
@stop

@section('js')
<script>
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var anime_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatusAnime',
                data: {'status': status, 'anime_id': anime_id},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })
</script>
<script>
    $(function() {
        $('.top-class').change(function() {
            var top = $(this).prop('checked') == true ? 1 : 0;
            var anime_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeTopAnime',
                data: {'top': top, 'anime_id': anime_id},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })
</script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
@if(Session::has('animeadded'))
    <script>
        swal("Good job!", "New Anime Has Been Deleted!!", "success");
    </script>
@endif
@if(Session::has('animedeleted'))
    <script>
        swal("Good job!", "Anime Has Been Deleted!!", "success");
    </script>
@endif
@if(Session::has('animeupdated'))
    <script>
        swal("Good job!", "Anime Has Been Updated Successfully!!", "success");
    </script>
@endif
@stop
