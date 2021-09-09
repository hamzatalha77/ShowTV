@php
    $roles = App\Models\Role::get();
@endphp
@extends('adminlte::page')

@section('title', 'Dashboard')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@section('content_header')
    <h1>Add New User</h1>
@stop

@section('content')
@if(Auth::user()->hasRole('administrator'))

<div class="container">
    <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
        <option value="AL">Alabama</option>
          ...
        <option value="WY">Wyoming</option>
      </select>
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-header">
            <div class="row ">
                <div class="col-sm-3">Choisir un roles :</div>

                <div class="col-sm-9">
                    <select name="role_id"  class="form-control" multiple>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    <div class="mb-3">
        <label class="form-label">First Name</label>
        <input type="text" name="name" class="form-control">
        <span class="text-danger error-text first_name_error"></span>
    </div>
    <div class="mb-3">
        <label class="form-label">Last Name</label>
        <input type="text"  name="lname" class="form-control">
        <span class="text-danger error-text last_   name_error"></span>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
        <span class="text-danger error-text email_error"></span>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        <span class="text-danger error-text password_error"></span>
    </div>
    <div class="upload-imgs">
        <div class="img-upload-row">
            <div class="upload-column">
                <input onchange="doAfterSelectImage(this)" type="file" name="user_image">
                <span class="text-danger error-text product_image_error"></span>
                <label class="img-uploaders">
                    <img src="{{ asset('assets/images/download.png') }}" alt="" id="post_user_image">
                </label>
                <p>Post User Image</p>
            </div>
        </div>
    </div>
    <button type="submit" class="save_posts_btn mt-4">Submit</button>
  </form>
 </div>

 @endif
@yield('content')



@stop

@section('css')

    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        img{
    max-width: 100%;
    display: block;
}

.img-upload-row{
    display: flex;
    margin: -10px;
}

.upload-column{
    width: calc(100% / 5);
    position: relative;
    padding: 10px 10px;
    border: 1px;
}

.img-uploaders{
    width: 100%;
    height: 200px;
    margin: 0;
    border: 1px solid #cacaca;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

    </style>

@stop

@section('js')
@include('sweetalert::alert')

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>

 function doAfterSelectImage(input){
     console.log(input);
     readURL(input);
 }
 function readURL(input){
     if(input.files && input.files[0]){
         var reader = new FileReader();
         reader.onload = function (e){
             $('#post_user_image').attr('src',e.target.result);
         };
         reader.readAsDataURL(input.files[0]);
     }
 }
</script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
{{-- <script src="{{ asset('assets/js/custom.js') }}"></script> --}}
{{-- <script>
    $(function(){
        $('#form').on('submit', function(e){
            e.preventDefault();

            var form = this;
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text(''),
                },
                success:function(data){
                    if(data.code == 0){
                        $.each(data.error, function(prefix,val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                    }else{
                        $(form)[0].reset();
                        alert(data.msg);
                    }
                }
            });
        });
    })
</script> --}}
@stop
