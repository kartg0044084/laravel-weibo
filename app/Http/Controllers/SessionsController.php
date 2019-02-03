<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            session()->flash('success', '成功登入');
            return redirect()->route('users.show', [Auth::user()]);
        } else {
            session()->flash('danger', '你的電子信箱或密碼有錯誤');
            return redirect()->back()->withInput();
        }
    }
}
