
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
@if (session('status'))
<h6 class="alert alert-success">{{ session('status') }}</h6>
@endif
<form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3">Choisir un role :</div>
            <div class="form-group">
                <div class="checkbox">
                    <label>superadministrator</label>
                        <input type="checkbox" name="roles[]"  value="superadministrator" {{ $user->hasRole('superadministrator') ? 'checked' : ''}}>
                </div>
                <div class="checkbox">
                    <label>administrator</label>
                        <input type="checkbox" name="roles[]"  value="administrator" {{ $user->hasRole('administrator') ? 'checked' : ''}}>
                </div>
                <div class="checkbox">
                    <label>user</label>
                        <input type="checkbox" name="roles[]"  value="user" {{ $user->hasRole('user') ? 'checked' : ''}}>
                </div>
                <div class="checkbox">
                    <label>role_name</label>
                        <input type="checkbox" name="roles[]"  value="role_name" {{ $user->hasRole('role_name') ? 'checked' : ''}}>
                </div>
            </div>

        </div>
        <div class="card mt-5">
            <div class="card-header">
                <h3>Formulaire</h3>
            </div>
            <div class="card-body">
                <div class="col-sm-12">
                        <div class="col-md-4" >
                            <label for="prenom" class="form-label">First Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="prenom" >
                        </div>
                        <div class="col-md-4" >
                            <label for="nom"  class="form-label">Last Name</label>
                            <input type="text" name="lname" value="{{ $user->lname }}" class="form-control" id="name" >
                        </div>

                        <div class="col-md-4" >
                            <label for="adresse" class="form-label">Email</label>
                            <input type="text" name="email" value="{{ $user->email }}"class="form-control" id="address" >
                        </div>
                        <div class="upload-imgs">
                            <div class="img-upload-row">
                                <div class="upload-column">
                                    <input onchange="doAfterSelectImage(this)" type="file" name="user_image">
                                    <span class="text-danger error-text product_image_error"></span>
                                    <label class="img-uploaders">
                                        <img src="{{ asset('images/' .$user->user_image) }}" alt="" id="post_user_image">
                                    </label>
                                    <p>Post User Image</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>

                </div>
            </div>
        </div>
        </div>
</form>
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

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
@stop
