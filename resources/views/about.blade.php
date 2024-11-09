@extends('layouts.app')

@section('title')
    Data About
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if ($message = Session::get('message'))
                    <div class="alert alert-success">
                        <strong>Berhasil</strong>
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul"
                            value="{{ $about->judul }}">
                    </div>
                    @error('judul')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Sub Judul</label>
                        <textarea name="subjudul" id="" cols="30" rows="5" class="form-control" placeholder="subjudul">{{ $about->subjudul }}</textarea>
                    </div>
                    @error('subjudul')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi 1</label>
                        <textarea name="deskripsi_1" id="" cols="30" rows="7" class="form-control"
                            placeholder="deskripsi_1">{{ $about->deskripsi_1 }}</textarea>
                    </div>
                    @error('deskripsi_1')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi 2</label>
                        <textarea name="deskripsi_2" id="" cols="30" rows="7" class="form-control"
                            placeholder="deskripsi_2">{{ $about->deskripsi_2 }}</textarea>
                    </div>
                    @error('deskripsi_2')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 1</label>
                        <input type="text" class="form-control" name="kelebihan_1" placeholder="Kelebihan 1"
                            value="{{ $about->kelebihan_1 }}">
                    </div>
                    @error('kelebihan 1')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 2</label>
                        <input type="text" class="form-control" name="kelebihan_2" placeholder="Kelebihan 2"
                            value="{{ $about->kelebihan_2 }}">
                    </div>
                    @error('kelebihan 2')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 3</label>
                        <input type="text" class="form-control" name="kelebihan_3" placeholder="Kelebihan 3"
                            value="{{ $about->kelebihan_3 }}">
                    </div>
                    @error('kelebihan 3')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Kelebihan 4</label>
                        <input type="text" class="form-control" name="kelebihan_4" placeholder="Kelebihan 4"
                            value="{{ $about->kelebihan_4 }}">
                    </div>
                    @error('kelebihan 4')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
