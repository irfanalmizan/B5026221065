@extends('master')

@section('title', 'Kertas HVS')

@section('konten')
    <h2>www.malasngoding.com</h2>
    <h3>Kertas HVS</h3>

    <a href="/kertashvs/tambahkertas" class="btn btn-primary"> + Tambah Kertas</a>

    <br />
    <p>Cari Data Kertas berdasarkan nama :</p>
    <form action="/kertashvs/carikertas" method="GET">
        <input class="form-control" type="text" name="carikertas" placeholder="Cari Kertas HVS .."
            value="{{ old('carikertas', isset($carikertas) ? $carikertas : '') }}">
        <input class="btn btn-primary" type="submit" value="CARI">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($kertashvs as $k)
            <tr>
                <td>{{ $k->kodekertashvs }}</td>
                <td>{{ $k->merkkertashvs }}</td>
                <td>{{ $k->stockkertashvs }}</td>
                <td>{{ $k->tersedia }}</td>
                <td>
                    <a href="/kertashvs/displaykertas/{{ $k->kodekertashvs }}" class="btn btn-success">View</a>
                    |
                    <a href="/kertashvs/editkertas/{{ $k->kodekertashvs }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/kertashvs/hapuskertas/{{ $k->kodekertashvs }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
