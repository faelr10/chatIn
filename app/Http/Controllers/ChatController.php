<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $valor = $request->input('user');
        $email = session('email');

        return view('chat', ['valor' => $valor, 'id' => $email]);
    }

    public function processLogin(Request $request)
    {
        $valor = $request->input('user');
        $email = $request->input('email');

        return redirect()->route('chat', ['user' => $valor, 'id' => $email]);
    }
}
