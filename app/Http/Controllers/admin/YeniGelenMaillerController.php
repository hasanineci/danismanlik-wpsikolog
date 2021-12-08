<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use Illuminate\Http\Request;

class YeniGelenMaillerController extends Controller
{
    public function YeniGelenMailler_GET()
    {
        $mail = Mail::where('durum','Okunmadı')->orderBy('created_at','desc')->get();
        return view('admin.pages.yeni-gelen-mailler', compact('mail'));
    }

    public function YeniGelenMailler_POST()
    {
        # code...
    }
}
