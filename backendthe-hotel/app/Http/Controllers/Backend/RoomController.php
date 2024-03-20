<?php

// Namespace declaration
namespace App\Http\Controllers\Backend;

// Importing necessary classes
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

// Class declaration
class RoomController extends Controller
{
    // Store Data Controller method
    public function store(Request $req)
    {
        try {
            $req->validate([
                'room_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'room_id' => 'required',
                'room_name' => 'required|string|max:255',
                'room_price' => 'required|numeric|min:1',
            ]);

            // Handle file upload
            if ($req->hasFile('room_img')) {
                $image = $req->file('room_img');
                $imageName = '/images/rooms/' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/images/rooms'), $imageName);
            }
            // Extract data from the request
            $data = [
                'room_id' => $req->input('room_id'),
                'room_name' => $req->input('room_name'),
                'room_price' => $req->input('room_price'),
                'room_desc' => $req->input('room_desc'),
                'room_active' => $req->input('room_active', '1'),
                'room_type_id' => $req->input('room_type_id'),
                'room_img' => $imageName,
                'created_date' => now(),
                'updated_date' => now(),
                'deleted_date' => now(),
            ];

            // Insert data into the database
            $inserted = DB::table('tblrooms')->insert($data);
            // dd($data);
            if ($inserted) {
                Session::flash('success', 'Room created successfully.');
                return redirect()->back();
            }
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong: ' . $e->getMessage());
            return redirect()->back();
        }

    }

    // Edit Data controller
    public function edit($id)
    {
        $room = DB::table('tblrooms')->get();
        
        $roomtype = DB::table('tblroomtypes')->get();
        
        return view('pages.edit', compact('room', 'roomtype'));
    }




    // Delete Data Controller 
    public function destroy(Request $request, $id)
    {
        $idata = DB::table('tblrooms')
            ->where('room_id', $id)
            ->update(['room_active' => '0']);
        return redirect('tables/basic')->with('success', 'Room deactivated successfully');
    }

}
