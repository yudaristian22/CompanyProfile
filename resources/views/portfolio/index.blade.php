@extends('layouts.app')

@section('title')
    Data Portfolio
@endsection

@section('content')
    <div class="container">
        <a href="/admin/portfolios/create" class="mb-3 btn btn-primary">Tambah Data</a>
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
                    @foreach ($portfolios as $portfolio)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td> {{ $portfolio->title }}</td>
                            <td> {{ $portfolio->description }}</td>
                            <td>
                                <img src="/image/{{ $portfolio->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="mr-2 btn btn-warning">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
