<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Find user
    public function find(Request $request)
    {
        $cek = DB::table('user')->where('email',$request->email)->value('password');
        if (!$cek) {
            return response('Pengguna tidak ditemukan',404);
        }
        if ($request->password == $cek) {
            return response('Berhasil login',200);
        }
        return response('Gagal Login',401);
    }

    public function makeUser(Request $request)
    {
        $this->validate($request,[
            'email','password'
        ]);
        $create = UserModel::create($request->all());
        return response()->json(
            [
                'success' => true,
                'message' => 'User baru berhasil ditambahkan',
                'user' => $create
            ]
            );
    }
}
