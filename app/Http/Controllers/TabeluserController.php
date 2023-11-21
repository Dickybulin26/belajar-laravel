<?php

namespace App\Http\Controllers;

use App\Models\Tabeluser;
use Illuminate\Http\Request;

class TabeluserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'tbl_user' => TabelUser::all()
        ];
        return view('tbl_user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambahuser()
    {
        //
        return view('tbl_user.tambahuser');
    }

    public function saveuser(Request $request){
        $data = $request->validate([
            'username' => ['required'],
            'role' => ['required'],
            'password' => ['required']
        ]);

        if(isset($request->id_user)):
            $update = TabelUser::where('id_user', '=', $request->id_user)->update($data);
            return $update ? redirect()->route('tbl_user.index') : redirect()->route('tbl_user.tambahuser');

        else : 
            $insert = TabelUser::create($data);
            return $insert ? redirect()->route('tbl_user.index') : redirect()->route('tbl_user.tambahuser');

        endif;
    }
}