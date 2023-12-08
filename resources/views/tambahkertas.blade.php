@extends('master')

@section('title', 'Tambah Kertas HVS')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Tambah Kertas</h3>

    <a href="/kertashvs"> Kembali</a>

    <br />
    <br />

    <form action="/kertashvs/storekertas" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="merk" class="col-xl-2 col-form-label">Merk Kertas HVS</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="merk" name="merk">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock" class="col-xl-2 col-form-label">Stock Kertas HVS</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="stock" name="stock">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-xl-2 col-form-label">Tersedia</label>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tersedia1" name="tersedia" value="Y" checked>
                <label class="custom-control-label" for="tersedia1">Y</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="tersedia2" name="tersedia" value="N">
                <label class="custom-control-label" for="tersedia2">N</label>
              </div>
        </div>
        <input type="submit" value="Simpan Data">
    </form>

@endsection
