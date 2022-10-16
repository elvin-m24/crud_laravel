<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LihatController extends Controller
{
    public function index()
    {
        $keberangkatan = DB::table('keberangkatans')->paginate(10);
        return view('index', ['keberangkatans' => $keberangkatan]);
    }
}
