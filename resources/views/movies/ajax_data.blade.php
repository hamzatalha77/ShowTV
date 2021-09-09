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

