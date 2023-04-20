
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>All Seasons of serie: {{$serie->serie_name}}</h1>
@stop

@section('content')

<table class="table">
    <thead>
    <tr>
        <th>ID Season</th>
        <th>Season Image</th>
        <th>Serie Name</th>
        <th>Serie Genres</th>
        <th>Season Name</th>
        <th>Season Number</th>
        <th>User Name</th>
        <th>Visible</th>
         <th>Action</th>

    </tr>
    </thead>
    <tbody>
    <tr>

        @foreach ($seasons as $season)
        <td>{{$season->id}}</td>
         <td> <img src="{{ $season->photo_season }}" alt="" style="width:90px"></td>
            <td>{{$serie->serie_name}}</td>
                <td>
                    @forelse($serie->genres as $genre)
                        {{ $genre->genre }}
                        @empty
                        <p>NO genres</p>
                    @endforelse
                </td>
            <td>{{$season->season_name}}</td>
            <td>{{$season->number}}</td>
            <td>{{$season->user_name}}</td>
            <td>
                <label class="switch">
                <input data-id="{{$season->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $season->status ? 'checked' : '' }}>
                <span class="slider round"></span>
                </label>
            </td>
             <td>
                <form action="{{ route('destroy1',$season->id) }}" method="POST">
                    <a class="btn btn-success" href="{{ route('addepisodes', $season->id) }}">Add Episode</a>
                    <a class="btn btn-primary" href="{{ route('showepisodes', $season->id) }}">Show Episodes</a>
                    <a class="btn btn-info" href="{{ route('showepisodetelfazy', $serie->id) }}">Show</a>
                    <a class="btn btn-warning" href="{{ route('editseason', $season->id) }}">Edit</a>
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
@stop

@section('js')
<script>
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var season_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatusSeason',
                data: {'status': status, 'season_id': season_id},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })
</script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
@if(Session::has('seasonadded'))
    <script>
        swal("Good job!", "New Season Has Been Added!!", "success");
    </script>
@endif
@if(Session::has('seasondeleted'))
    <script>
        swal("Good job!", "Season Has Been Deleted!!", "success");
    </script>
@endif
@if(Session::has('seasonupdated'))
    <script>
        swal("Good job!", "Season Has Been Updated Successfully!!", "success");
    </script>
@endif
@stop
