@extends('layouts.master')

@section('title','Buat Profil')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-2"></div>
        <div class="col-8">
            <form class="mt-5" action="buat-profil" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleFormControlInput1">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Foto</label>
                    <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
                  </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" name="jurusan" class="form-control" id="jurusan">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Bio</label>
                  <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Tentang Saya</label>
                  <textarea class="form-control" name="tentang" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="github">Link Github</label>
                    <input type="text" name="github" class="form-control" id="github">
                </div>
                <div class="form-group">
                    <label for="ln">Link Linkedin</label>
                    <input type="text" name="ln" class="form-control" id="ln">
                </div>
                <div class="form-group">
                    <label for="fb">Link Facebook</label>
                    <input type="text" name="fb" class="form-control" id="ln">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
              </form>
        </div>
    </div>
</div>
@endsection