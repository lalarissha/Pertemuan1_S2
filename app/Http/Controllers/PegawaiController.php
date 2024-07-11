<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PegawaiController extends Controller
{
    public function index() {
        $data_layout = [
            'title' => 'Halaman Pegawai'
        ];
        View::share($data_layout);
        $data = [
            'username' => 'Rissa Ulandari',
            'umur' => 19
        ];

        return view ('pegawai.index', $data);
    }
}
