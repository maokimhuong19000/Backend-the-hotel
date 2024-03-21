<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    public function showData(Request $request){
        // $getData['tblrooms'] =DB::table('tblrooms')
        // ->get();
        // // dd($getData);
        // return view('frontend.room-list-1',$getData);
    }
}
