@extends('master')

@section('title', 'Pesan Emot')

@section('konten')
    <h2>www.malasngoding.com</h2>
    <h3>Pesan Teks</h3>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>ISI PESAN</th>
        </tr>
        @foreach ($chat as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>
                    {!! app('App\Http\Controllers\ChatController')->konversiEmotKeGambar($c->pesan) !!}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
