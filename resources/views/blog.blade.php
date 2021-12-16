@extends('layouts.master')

@section('title' , 'Blog Saya')

@section('content')
<div class="background">
    <div class="container"> 
        <div class="kategori">
            <h2 >KATEGORI</h2>
        </div>
        <div class="row" style="margin-bottom: 100px;">
            <div class="col-4 ">
                <div class="box">
                    <img src="{{asset ('/img/code.jpg')}}" alt="">
                    <div class="caption">
                        <div class="capt">
                            <a href="/read-kategori/1" >Web</a>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <img src="{{asset ('/img/artikel.jpg')}}" alt="">
                    <div class="caption">
                        <div class="capt">
                            <a href="/read-kategori/2" style="color: black">Artikel</a>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <img src="{{asset ('/img/tips.jpg')}}" alt="">
                    <div class="caption">
                        <div class="capt">
                            <a href="/read-kategori/3" style="color: black">Tips & Trik</a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        @foreach ($post->sortByDesc('created_at') as $post)
            
        <div class="card blog " style="border: none">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{'/img/' . $post->gambar}}" class="gb-blog">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title text-judul">{{$post->judul}}</h5>
                    <p class="card-text"><small class="text-muted">kategori: {{$post->kategori->name}}</small></p>
                    <p class="card-text"><small class="text-muted">Diposting {{$post->publish()}}</small></p>
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