<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RentalLog;

class AdminRentalLogController extends Controller
{
    /**
     * 利用履歴一覧
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rental_logs = RentalLog::with(['item', 'user'])->get();
        return view('admin.rental_log.index', compact('rental_logs'));
    }
}
