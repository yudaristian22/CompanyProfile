@extends('layouts.app')

@section('title')
    Data Slider
@endsection

@section('content')
    <div class="container">
        <a href="/sliders/create" class="mb-3 btn btn-primary">Tambah Data</a>
        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong></strong>
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($sliders as $slider)
                        <td>{{ $i++ }}</td>
                        <td> {{ $slider->title }}</td>
                        <td> {{ $slider->description }}</td>
                        <td>
                            <img src="/image/{{ $slider->image }}" alt="" class="img-fluid" width="90">
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('sliders.edit', $slider->id) }}" class="mr-2 btn btn-warning">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
