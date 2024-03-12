<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{

    public function store(Request $id)
    {

        $i = DB::table('tblrooms')
            ->where('room_id', $id)
            ->update(['room_active' => '0']);
        

        return view('pages.starter')->with('success','Data has been deleted successfully');
    }

    public function destroy($id)
    {
        // Find the item by ID
        $i = DB::table('tblrooms')
            ->where('room_id', $id)
            ->update(['room_active' => '0']);
        //    dd($id);
        return redirect('table.basic')->with('success', 'Data has been deleted successfully.');
    }

}