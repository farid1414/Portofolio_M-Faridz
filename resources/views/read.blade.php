@extends('layouts.master')

@section('title','Read')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="" style="text-align: center;margin-top:15px">
                    <img src="{{'/img/' . $post->gambar}}" class="gb-blog">
                </div>
                <div class="" style="text-align: center;margin-top:-40px; font-size:20px;">
                    <a href="/read-kategori/{{$post->id}}" style="color: black;text-decoration:none;">{{$post->kategori->name}}</a>
                </div>
                <div class="" style="margin-top: 20px">
                    <h3>{{$post->judul}}</h3>
                </div>
                <div class="">
                    <p>{!! $post->body !!}</p>
                </div>
            </div>
        </div>
    </div>
@endsection