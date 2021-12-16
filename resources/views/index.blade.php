@extends('layouts.master')

@section('title','Portofolio | M Faridz')

@section('content')
@if(session('sukses'))
<div class="alert alert-primary" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="kartu">
                    <div class="row">
                        <div class="col-8">
                            <div class="profil">
                                <img src="{{'/img/' . $profil->gambar}}" alt="">
                            </div>
                        </div>
                          <div class="col-4">
                            <div class="judul">
                                <p>Assalamualaikaum Warohmatullah Hiwabarokatuh, Saya </p>
                                <h1>{{$profil->nama}}</h1>
                                <p class="study">{{$profil->jurusan}}</p>
                            </div>
                            <div class="isi">
                                <p>{{$profil->bio}}</p>
                            </div>
                           <div class="icon">
                               <a href="{{$profil->github}}" class="btn btn-primary"><i class="fa fa-github"></i></a>
                               <a href="{{$profil->ln}}" class="btn btn-primary"><i class="fa fa-linkedin"></i></a>
                               <a href="{{$profil->fb}}" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
                           </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-center text-light text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2021 Copyright:
      <a class="text-light" href="https://mdbootstrap.com/">Mochamad Faridz Dwi Putra (19051397043)</a>
    </div>
    <!-- Copyright -->
  </footer>
@endsection