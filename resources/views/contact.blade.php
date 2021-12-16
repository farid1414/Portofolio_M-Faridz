@extends('layouts.master')

@section('title','Contact')

@section('content')
    <div class="container tentang-saya">
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-2">
                        <i class="fa fa-home fa-fw " style="font-size: 25px;margin:0 auto;"></i>
                    </div>
                    <div class="col-10">
                        <h5>Cerme Gresik</h5>
                        <p class="text-muted alamat">Dsn Kemendung Ds Ngembung Rt 03 Rw 01</p>
                    </div>
                    <div class="col-2">
                        <i class="fa fa-phone fa-fw " style="font-size: 25px;margin:0 auto;"></i>
                    </div>
                    <div class="col-10">
                        <h5>+62 858 0604 8767</h5>
                        <p class="text-muted alamat">Whatsapp & telephone</p>
                    </div>
                    <div class="col-2">
                        <i class="fa fa-envelope fa-fw " style="font-size: 25px;margin:0 auto;"></i>
                    </div>
                    <div class="col-10">
                        <h5>faridp551@gmail.com</h5>
                        <p class="text-muted alamat">Email aktif saya</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <form action="/contact" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <input type="text" class="form-control col-form-label-sm" id="exampleInputEmail1" name="name" placeholder="Masukkan nama anda">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control col-form-label-sm" id="exampleInputEmail1" name="email" placeholder="Masukkan email anda">
                    </div>
                    <div class="form-group">
                      <input type="text" name="subjek" class="form-control col-form-label-sm" id="exampleInputEmail1" placeholder="Masukkan subjek">
                    </div>
                </div>
            <div class="col-4">
                <div class="form-group">
                    <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan pesan anda"></textarea>
                </div>
                <button type="submit" class="btn btn-primary float-right btn-submit">Submit</button>
              </form>
            </div>
        </div>
    </div>
@endsection