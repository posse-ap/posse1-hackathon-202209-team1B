<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MypageController extends Controller
{
    public function index()
    {
        return view('mypage');
    }

    public function update(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return back();
    }

    public function password_update(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->password = Hash::make($request->password);
        $user->save();
        return back();
    }
}
