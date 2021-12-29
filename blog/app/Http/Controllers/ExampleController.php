<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $reruest)
    {
        // $this->request = $request;
    }

    public function getDataUser()
    {
        $Data = DB::table("user")->get();
        return response()->json(["status"=>"200", "result"=>$Data]);
    }

    public function insertDataUser(Request $request)
    {
        $Data = user::create([
            'username' => $request->username,
            'nama_lengkap' => $request->namaLengkap,
            'no_telp' => $request->noTelp,
            'alamat_lengkap' => $request->alamatLengkap,
            'password' => $request->password,
        ]);
        return response()->json(["status"=>"200", "result"=>$Data]);
        // $input = $this->request->all();
        // $insert = \DB::table("user")->insert([$input]);
        // return $input;
    }
}
