<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use Illuminate\Http\Request;

class GelenMaillerController extends Controller
{
    public function GelenMailler_GET()
    {
        $mail = Mail::where('durum','Okundu')->orderBy('created_at','desc')->get();
        return view('admin.pages.gelen-mailler', compact('mail'));
    }

    public function GelenMailler_POST()
    {
        # code...
    }

    public function oku_POST(Request $request)
    {
        $mail = Mail::where('id', $request->mail_id)->first();
        return response()->json($mail);
    }
}
