@extends('layouts.master')

@section('title','Login')
    
@section('content')
@section('content')
@if(session('sukses'))
<div class="alert alert-primary" role="alert">
    {{session('sukses')}}
</div>
@elseif(session('gagal'))
<div class="alert alert-danger" role="alert">
    {{session('gagal')}}
</div>
@endif
    <div class="container">
        <div class="login">
            <form action="/login" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <h4 class="text-center">Login</h4>
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{old ('email')}}" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="bl-akun">
                    <p>Belum punya akun <a href="/registrasi">Registrasi</a></p>
                </div>
                <button type="submit" class="btn btn-primary ">Login</button>
              </form>
        </div>
    </div>
@endsection