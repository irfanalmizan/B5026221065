@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
            <div class="form-group row">
                <label for="nama" class="col-xl-1 col-form-label mr-2">Nama</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" required="required" name="nama"
                        value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-xl-1 col-form-label mr-2">Jabatan</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" required="required" name="jabatan"
                        value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-xl-1 col-form-label mr-2">Umur</label>
                <div class="col-xs-9">
                    <input type="number" class="form-control" required="required" name="umur"
                        value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-xl-1 col-form-label mr-2">Alamat</label>
                <div class="col-xs-9">
                    <textarea class="form-control" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach

@endsection
