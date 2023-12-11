<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function indexchat()
    {
        // mengambil data dari table chat
        $chat = DB::table('chat')->get();

        // mengirim data chat ke view index
        return view('indexchat', ['chat' => $chat]);
    }

    public function konversiEmotKeGambar($teks)
    {
        $emotGambar = [
            ':))' => '1.png',
            ':3'  => '2.png',
            ':P'  => '3.png',
            ':C'  => '4.png',
            ';)'  => '5.png',
        ];

        $arrayKata = explode(" ", $teks);

        foreach ($arrayKata as &$kata) {
            if (array_key_exists($kata, $emotGambar)) {
                $kata = '<img src="' . asset('gambar/' . $emotGambar[$kata]) . '" alt="' . $kata . '">';
            }
        }

        $hasilKonversi = implode(" ", $arrayKata);

        return $hasilKonversi;
    }
}
