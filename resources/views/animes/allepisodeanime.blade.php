@php
    $series = App\Models\Serie::get();

@endphp
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>All Episodes</h1>
@stop

@section('content')
<h1>{{$anime->anime_name}}</h1>  <h1>{{ $season->season_number }}</h1>
<img src="{{ $season->season_image }}" alt="" style="width:90px">
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Episode name</th>
        <th>User Name</th>
        <th>IMDB episode</th>
        <th>Visible</th>
        <th>Action</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach ($episodes as $episode)
            <td>{{$episode->id}}</td>
            <td>{{$episode->episode_name}}</td>
            <td>{{$episode->user_name}}</td>
            <td>{{$episode->imdb_episode}}</td>
            <td>
                <label class="switch">
                <input data-id="{{$episode->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $episode->status ? 'checked' : '' }}>
                <span class="slider round"></span>
                </label>
            </td>
            <td>
                 <form action="{{ route('anime_episodes.destroy',$episode->id) }}" method="POST">



                    <a class="btn btn-warning" href="{{ route('anime_episodes.edit', $episode->id) }}">Edit</a>
                      <a class="btn btn-info" href="{{ route('anime_seasons.show', $episode->id) }}">Show</a>
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
            var episode_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/changeStatusAnimeEpisode',
                data: {'status': status, 'episode_id': episode_id},
                success: function(data){
                    console.log(data.success)
                }
            });
        })
    })
</script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
@if(Session::has('episodeadded'))
    <script>
        swal("Good job!", "New Episode Has Been Deleted!!", "success");
    </script>
@endif
@if(Session::has('episodedeleted'))
    <script>
        swal("Good job!", "Episode Has Been Deleted!!", "success");
    </script>
@endif
@if(Session::has('episodeupdated'))
    <script>
        swal("Good job!", "Episode Has Been Updated Successfully!!", "success");
    </script>
@endif
@stop
