@extends('layouts.master')

@section('title','Registrasi')
    
@section('content')
    <div class="container">
        <div class="login">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/registrasi" method="POST">
                {{csrf_field()}}
                <h4 class="text-center">Registrasi</h4>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('name')}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{old('email')}}" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="bl-akun">
                    <p>sudah punya akun? <a href="/login">Login</a></p>
                </div>
                <button type="submit" class="btn btn-primary ">Registrasi </button>
              </form>
        </div>
    </div>
@endsection