<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Mail;
use App\Models\Randevular;
use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    public function AdminIndex()
    {
        return view('admin.pages.home');
    }
}
