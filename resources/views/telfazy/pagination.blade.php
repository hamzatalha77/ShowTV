{{-- @if($paginator->hasPages())
<div id="page">

<div class="pagination">
    <div class="cen">


    @if($paginator->onFirstPage())
     <a>&laquo;</a>
    @else
    <a href="{{ $paginator->previousPageUrl() }}">&laquo;</a>
    @endif


    @if(is_array($elements[0]))
        @foreach ($elements[0] as $page => $url)
        @if($page == $paginator->currentPage())
        <a href="{{ $url }}" class="active">{{ $page }}</a>
        @else
        <a href="{{ $url }}">{{ $page }}</a>
        @endif
        @endforeach
    @endif

    @if($paginator->hasMorePages())
    <a href="{{ $paginator->nextPageUrl() }}">&raquo;</a>
    @else
        <a>&raquo;</a>
    @endif
    </div>
  </div>

</div>
@endif --}}

{{-- @if ($paginator->hasPages())
<div id="page">
  <div class="pagination">
    <div class="cen">
       
        @if ($paginator->onFirstPage())
            <a class="disabled"><span>«</span></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev">«</a>
        @endif

        @if($paginator->currentPage() > 3)
            <a href="{{ $paginator->url(1) }}" class="active">1</a>
        @endif
        @if($paginator->currentPage() > 4)
            <span>...</span>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                    <span>{{ $i }}</span>
                @else
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 3)
           <span>...</span>
        @endif
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <a href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
        @endif

        @if ($paginator->hasMorePages())
           <a href="{{ $paginator->nextPageUrl() }}" rel="next">»</a>
        @else
            <span>»</span>
        @endif
      </div>
    </div>
  
  </div>
@endif --}}


@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
           <span>«</span>
        @else
           <a href="{{ $paginator->previousPageUrl() }}" rel="prev">«</a>
        @endif

        @if($paginator->currentPage() > 3)
          <a href="{{ $paginator->url(1) }}">1</a>
        @endif
        @if($paginator->currentPage() > 4)
           <span>...</span>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                @if ($i == $paginator->currentPage())
                   <span class="active1">{{ $i }}</span>
                @else
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 3)
            <span>...</span>
        @endif
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <a href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
           <a href="{{ $paginator->nextPageUrl() }}" rel="next">»</a>
        @else
            <span>»</span>
        @endif
    </div>
@endif





<!DOCTYPE html>
<html>
<head>
<style>
.pagination {
  text-align: center;
    margin: 11px auto;
    height: 50px;
    padding-top: 12px;
    background-color: rgba(0, 0, 0, 0.7);
    width: 99%;
    margin-left: 10px;
    justify-content: center;
    display: inline-block;
}

.pagination a {
  color: white;
  padding: 6px;
    padding-left: 10px;
    padding-right: 10px;
  text-decoration: none;
}
.active1 {
  padding: 6px;
    padding-left: 10px;
    padding-right: 10px;
  background-color: #FEC107;
  color: black;
}
.pagination a.active {
  background-color: #FEC107;
  color: black;
}

.pagination a:hover:not(.active) {background-color: #FEC107;}
.cen{
    display: table;
    margin: 0 auto;

}
/* #page{
    padding: 10px;
}  */
</style>
</head>
<body>




</body>
</html>


