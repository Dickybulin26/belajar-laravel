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

    public function index()
    {

        $data = [
            'jenis_surat' => JenisSurat::all()
        ];
        return view('jenissurat.index', $data);
    }

    public function formTambah()
    {
        return view('jenissurat.tambah');
    }

    public function simpan(Request $request)
    {
        $data = $request->validate([
            'jenis_surat' => ['required']
        ]);

        //* periksa apakah ada id_jenis_surat pada form yang dikirim

        if (isset($request->id_jenis_surat)) :
            // update jika id_jenis_surat ditemukan
            $update = JenisSurat::where('id_jenis_surat', '=', $request->id_jenis_surat)->update($data);
            if ($update) {
                return redirect()->route('jenissurat.index');
            } else {
                return redirect()->route('jenissurat.tambah');
            }

        else :
            // tambah data baru jenis_surat
            $insert = JenisSurat::create($data);
            if ($insert) {
                return redirect()->route('jenissurat.index');
            } else {
                return redirect()->route('jenissurat.tambah');
            }
        endif;
    }
}
