@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br>
    <br>

    @foreach ($pegawai as $p)
        <div class = "container">
            <div class = "row">
                <div class = "col-md-6">
                </div>

                <div class = "col-md-6">
                    <table class = "table">
                        <tr>
                            <th> Nama </th>
                            <td> {{ $p->pegawai_nama }} </td>
                        </tr>
                        <tr>
                            <th> Jabatan </th>
                            <td> {{ $p->pegawai_jabatan }} </td>
                        </tr>
                        <tr>
                            <th> Umur </th>
                            <td> {{ $p->pegawai_umur }} </td>
                        </tr>
                        <tr>
                            <th> Alamat </th>
                            <td> {{ $p->pegawai_alamat }} </td>
                        </tr>
                    </table>
                    <br>
                    <div class="text-center">
                        <a href = "/pegawai" class = "btn btn-primary"> OK </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
