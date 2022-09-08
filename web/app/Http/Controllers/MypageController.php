<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeUserInformationRequest;
use App\Models\User;
use App\Models\RentalLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class MypageController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $rental_logs = RentalLog::with('item')->where('user_id', $user_id)->get();
        return view('mypage', compact('rental_logs'));
    }

    public function update(ChangeUserInformationRequest $request)
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
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->password = Hash::make($request->password);
        $user->save();
        return back();
    }
}
