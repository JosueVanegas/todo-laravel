<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //
        $users = User::all();
        return view('user.index', compact('users'));
    }
    public function create()
    {

        User::create([
            "name" => "valeria",
            "email" => "test@test.com",
            "password" => Hash::make('123456')
        ]);
        return redirect()->route('user.index');
    }
}
