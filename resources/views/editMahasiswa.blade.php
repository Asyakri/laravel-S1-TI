@extends('layout.app')
@section('content')

<div class="container mt-3">
    <div class="section section-body">
        <div class="row">
            <div class="card col-sm-12">
                <div class="card-header">
                    <h4>Edit Bayi</h4>
                    <div class="card-header-action">
                        <a href="{{ route('mahasiswa') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body col-sm-8">
                    <form action="{{  route('mahasiswa.update',$data->id) }} " method="post">
                        @csrf
                        @method('put')

                        <div class="form-group">

                            <label for="nim-mahasiswa">Nama Mahasiswa</label>
                            <input class="form-control" type="text" name="nim" id="nim-mahasiswa" value="{{ $data->nim }}">

                        </div>
                        <div class="form-group">
                            <label for="nama-mahasiswa">Nama Mahasiswa</label>
                            <input class="form-control" type="text" name="nama" id="nama-mahasiswa" value="{{ $data->nama }}">

                        </div>
                        <div class="form-group">

                            <label for="jurusan">Jurusan</label>
                            <input class="form-control" class="form-control" type="text" name="jurusan" id="jurusan" value="{{ $data->jurusan }}">

                        </div>
                        <div class="form-group">

                            <label for="prodi">Prodi</label>
                            <input class="form-control" type="text" name="prodi" id="prodi" value="{{ $data->prodi }}">
                        </div>
                        <div class="form-group">

                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
