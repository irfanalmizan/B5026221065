@extends('master')

@section('title', 'Edit Kertas HVS')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Kertas HVS</h3>

    <a href="/kertashvs"> Kembali</a>

    <br />
    <br />

    @foreach ($kertashvs as $k)
        <form action="/kertashvs/updatekertas" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $k->kodekertashvs }}"> <br/>
            <div class="form-group row">
                <label for="merk" class="col-xl-2 col-form-label">Merk Kertas HVS</label>
                <div class="col-xs-9">
                    <input type="text" class="form-control" required="required" name="merk"
                        value="{{ $k->merkkertashvs }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="stock" class="col-xl-2 col-form-label">Stock Kertas HVS</label>
                <div class="col-xs-9">
                    <input type="number" class="form-control" required="required" name="stock"
                        value="{{ $k->stockkertashvs }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tersedia" class="col-xl-2 col-form-label">Tersedia</label>
                {{-- <div class="col-xs-9">
                    <textarea class="form-control" required="required" name="tersedia">{{ $k->tersedia }}</textarea>
                </div> --}}
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="tersedia1" required="required" name="tersedia" value="Y" {{ $k->tersedia }} checked>
                    <label class="custom-control-label" for="tersedia1">Y</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="tersedia2" required="required" name="tersedia" value="N" {{ $k->tersedia }}>
                    <label class="custom-control-label" for="tersedia2">N</label>
                  </div>
            </div>
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach

@endsection
