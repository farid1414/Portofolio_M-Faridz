@extends('layouts.master')

@section('title', 'About')

@section('content')
   
    <div class="container">
        <div class="row tentang-saya">
            <div class="col-6 ">
                <div class="judul-tentang">
                    <h1>TENTANG SAYA</h1>
                    <p>{{$profil->tentang}}</p>
                </div>
            </div>
            <div class="col-6">
                <div class="ahli">
                    <p>HTML 80%</p>
                    <div class="lar bg-html"></div>
                </div>    
                <div class="ahli">
                    <p>CSS 50%</p>
                    <div class="lar bg-css"></div>
                </div>    
                <div class="ahli">
                    <p>PHP 60%</p>
                    <div class="lar bg-php"></div>
                </div>    
                <div class="ahli">
                    <p>LARAVEL 75%</p>
                    <div class="lar bg-lar"></div>
                </div>    
            </div>
        </div>
    </div>
@endsection