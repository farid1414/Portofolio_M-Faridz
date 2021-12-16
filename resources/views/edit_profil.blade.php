@extends('layouts.master')

@section('title','Edit Profil')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-2"></div>
        <div class="col-8">
            <form class="mt-5" action="edit-profil/{{$profil->id}}" method="POST" enctype="multipart/form-data">
                <h4 style="text-align: center">Edit Profil Portofolio</h4>
                @method('PUT')
                {{csrf_field()}}
                <div class="form-group mt-5">
                  <label for="exampleFormControlInput1">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="{{old('nama', $profil->nama)}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Foto</label>
                    <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1" >
                  </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{old('jurusan',$profil->jurusan)}}">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Bio</label>
                  <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" rows="3">{{old('bio',$profil->bio)}}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Tentang Saya</label>
                  <textarea class="form-control" name="tentang" id="exampleFormControlTextarea1" rows="4">{{old('tentang',$profil->tentang)}}</textarea>
                </div>
                <div class="form-group">
                    <label for="github">Link Github</label>
                    <input type="text" name="github" class="form-control" id="github" value="{{old('github',$profil->github)}}">
                </div>
                <div class="form-group">
                    <label for="ln">Link Linkedin</label>
                    <input type="text" name="ln" class="form-control" id="ln" value="{{old('ln',$profil->ln)}}">
                </div>
                <div class="form-group">
                    <label for="fb">Link Facebook</label>
                    <input type="text" name="fb" class="form-control" id="fb" value="{{old('fb',$profil->fb)}}">
                </div>
                <button type="submit" class="btn btn-success float-right mb-5"><i class="fa fa-save"> Save</i></button>
              </form>
        </div>
    </div>
</div>
@endsection