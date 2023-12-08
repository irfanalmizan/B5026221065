@extends('master')

@section('title', 'Data Belanja')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Belanja</h3>

    <a href="/belanja"> Kembali</a>

    <br />
    <br />

    <form action="/belanja/storebelanja" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-xl-1 col-form-label mr-2">Kode Barang</label>
            <div class="col-xs-9">
                <input type="textfield" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-xl-1 col-form-label mr-2">Jumlah</label>
            <div class="col-xs-9">
                <input type="textfield" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-xl-1 col-form-label mr-2">Harga</label>
            <div class="col-xs-9">
                <input type="textfield" class="form-control" id="Harga" name="Harga">
            </div>
        </div>
        <input type="submit" value="Simpan Data">
    </form>

@endsection
