@extends('layouts.master')

@section('title','Kategori')

@section('content')
    <div class="container">
        <div class="tow">
            
    @foreach ($kategori->post as $post)
    <div class="card blog " style="border: none">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{'/img/' . $post->gambar}}" class="gb-blog">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title text-judul">{{$post->judul}}</h5>
                <p class="card-text"><small class="text-muted">kategori: {{$post->kategori->name}}</small></p>
                <p class="card-text"><small class="text-muted">Diposting</small></p>
              <p class="card-text isi-blog">{{$post->cuplikan}}</p>
            </div>
            <div class="card-footer float-right mb-3" style="background:none; border:none">
                <a href="/read/{{$post->slug}}" class="btn btn-sm btn-primary">View more...</a>
              </div>
          </div>
        </div>
      </div>
    @endforeach
        </div>
    </div>
@endsection