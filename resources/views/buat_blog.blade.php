@extends('layouts.master')

@section('title','Tambah Blog')

@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
            <div class="col-8">
                <form class="mt-5 mb-5" action="/create-blog" method="POST"  enctype="multipart/form-data" >
                    {{csrf_field()}}
                    <h4 style="text-align: center">Buat Blog Baru</h4>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                                <div class="form-group">
                      <label for="judul">Judul</label>
                      <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}">
                    </div>
                    <div class="form-group">
                      <label for="slug">Slug</label>
                      <input type="text" class="form-control" id="slug" name="slug" readonly value="{{old('slug')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Pilih Kategori</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="kategoris_id">
                        @foreach ($kategori as $kategori)
                        @if (old('kategoris_id') == $kategori->id)
                        <option value="{{$kategori->id}}" selected>{{$kategori->name}}</option>
                        @else
                        <option value="{{$kategori->id}}">{{$kategori->name}}</option>
                        @endif  
                        @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Poster</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1"  name="gambar">
                      </div>
                      <div class="form-group">
                        <label for="body">Body</label>
                        <input id="body" type="hidden" name="body" value="{{old('body')}}">
                        <trix-editor input="body"></trix-editor>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="modal-footer">
            </div>
    </div>
</div>

<script>
    const judul =document.querySelector('#judul');
    const slug =document.querySelector('#slug');

    judul.addEventListener('change' , function() {
        fetch('/buat-blog/slug?judul=' + judul.value)
        .then(response=> response.json())
        .then(data=> slug.value = data.slug)
    });


// membuat file upload trix tidak berjalan 
    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>

@endsection