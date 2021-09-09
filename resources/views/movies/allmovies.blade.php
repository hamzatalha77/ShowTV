{{-- @php
    $categories = App\Models\Category::get();

@endphp --}}
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
            <th>Movie Image</th>
            <th>Movie Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>User Name</th>
            <th>Quality</th>
            <th>IMDB</th>
            <th>Tags</th>
            <th>Visible</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($movies as $movie)
                {{-- {{ $movies->count() }} --}}
                <td>{{$movie->id}}</td>
                 <td> <img src="{{ asset('image1/' .$movie->image_movie) }}" alt="" style="width:90px"></td>
                    <td>{{$movie->movie_name}}</td>
                    <td>{{$movie->description}}</td>
                    <td>
                        @forelse($movie->categories as $category)
                            {{ $category->category }}
                            @empty
                            <p>NO category</p>
                        @endforelse
                    </td>
                    <td>{{$movie->user_name}}</td>
                    <td>{{$movie->quality}}</td>
                    <td>{{$movie->imdb}}</td>
                    <td>{{$movie->tags}}</td>
                    <td>
                        <label class="switch">
                        <input data-id="{{$movie->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $movie->status ? 'checked' : '' }}>
                        <span class="slider round"></span>
                        </label>
                    </td>

                    <td>
                        <form action="{{ route('movies.destroy',$movie->id) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('details', $movie->id) }}">Show</a>
                            <a class="btn btn-warning" href="{{ route('movies.edit', $movie->id) }}">Edit</a>
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
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var movie_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changeStatus',
                    data: {'status': status, 'movie_id': movie_id},
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
    @if(Session::has('userdeleted'))
        <script>
            swal("Good job!", "User Has Been Deleted!!", "success");
        </script>
    @endif
    @if(Session::has('userupdate'))
        <script>
            swal("Good job!", "New User Has Been Updated Successfully!!", "success");
        </script>
    @endif
@stop
