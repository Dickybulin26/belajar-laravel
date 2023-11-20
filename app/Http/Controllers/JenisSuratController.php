<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use Illuminate\Http\Request;

class JenisSuratController extends Controller
{
    //
    /**
     * Controller Index
     * Menampilkan seluruh daftar jenis surat yang ada di table jenis_surat
     * 
     * @return void
     */

    public function index() {

        $data = [
            'jenis_surat' => JenisSurat::all()
        ];
        return view('jenissurat.index',$data);
    }

    public function formTambah() {
        return view('jenissurat.tambah');
    }
}
