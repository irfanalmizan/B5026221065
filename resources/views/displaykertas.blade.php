@extends('master')

@section('title', 'Data Kertas HVS')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Kertas</h3>

    <a href="/kertashvs"> Kembali</a>

    <br>
    <br>

    @foreach ($kertashvs as $k)
        <div class = "container">
            <div class = "row">
                <div class = "col-md-6">
                </div>

                <div class = "col-md-6">
                    <table class = "table">
                        <tr>
                            <th> Kode </th>
                            <td> {{ $k->kodekertashvs }} </td>
                        </tr>
                        <tr>
                            <th> Merk </th>
                            <td> {{ $k->merkkertashvs }} </td>
                        </tr>
                        <tr>
                            <th> Stock </th>
                            <td> {{ $k->stockkertashvs }} </td>
                        </tr>
                        <tr>
                            <th> Tersedia </th>
                            <td> {{ $k->tersedia }} </td>
                        </tr>
                    </table>
                    <br>
                    <div class="text-center">
                        <a href = "/kertashvs" class = "btn btn-primary"> OK </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
