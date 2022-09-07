<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeUserInformationRequest;
use App\Models\User;
use App\Models\RentalLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $rental_logs = RentalLog::where("user_id" , $user_id)->get();
        $items = RentalLog::where('user_id', Auth::id())->with('item')->get();
        // dd($items);

        return view('mypage', compact('rental_logs','items'));

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
}
