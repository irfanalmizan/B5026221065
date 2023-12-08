@extends('master')

@section('title', 'Data Belanja')

@section('konten')
    <h2>www.malasngoding.com</h2>
    <h3>Data Belanja</h3>

    <a href="/belanja/tambahbelanja" class="btn btn-primary">Beli</a>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $b)
            <tr>
                <td>{{ $b->ID }}</td>
                <td>{{ $b->KodeBarang }}</td>
                <td>{{ $b->Jumlah }}</td>
                <td>{{ number_format($b->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($b->Jumlah * $b->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/belanja/hapusbelanja/{{ $b->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
