<?php
namespace App\Http\Controllers\Backend;
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
   
    public function store(Request $req) // Store Data Controller method
    {
        $req->validate([
            // 'room_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'room_id' => 'required',
            'room_name' => 'required|string|max:255',
            'room_price' => 'required|numeric|min:1',
        ]);
        try {
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

            if ($inserted) {
                Session::flash('success', 'Room created successfully.');
                return redirect('admin/pages/create')->with('success','Room created successfully');
            }
        } catch (Exception $e) {
            Session::flash('error', 'Something went wrong: ' . $e->getMessage());
            return redirect()->back();
        }
    }

    
    public function edit(Request $request) // Edit Data controller
    {
        $room = DB::table('tblrooms')->where('room_id', $_GET['id'])->first();

        $roomtype = DB::table('tblroomtypes')->get();

        return view('pages.edit', compact('room', 'roomtype'));
    }
    
    // public function update(Request $req)
    // {
    //     try {
    //         $req->validate([
    //             'room_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    //             'room_id' => 'required',
    //             'room_name' => 'required|string|max:255',
    //             'room_price' => 'required|numeric|min:1',
    //         ]);


    //         if ($req->hasFile('room_img')) {
    //             $image = $req->file('room_img');
    //             $imageName = '/images/rooms/' . time() . '.' . $image->getClientOriginalExtension();
    //             $image->move(public_path('/images/rooms'), $imageName);
    //         }

    //         $data = [
    //             'room_id' => $req->input('room_id'),
    //             'room_name' => $req->input('room_name'),
    //             'room_price' => $req->input('room_price'),
    //             'room_desc' => $req->input('room_desc'),
    //             'room_active' => $req->input('room_active', '1'),
    //             'room_type_id' => $req->input('room_type_id'),
    //             'room_img' => $imageName,
    //             'created_date' => now(),
    //             'updated_date' => now(),
    //             'deleted_date' => now(),
    //         ];

    //         // Insert data into the database
    //         // dd($data);
    //         $inserted = DB::table('tblrooms')->update($data);

    //         if ($inserted) {
    //             Session::flash('success', 'Room Updated successfully.');
    //             return redirect()->back();
    //         }
    //     } catch (Exception $e) {
    //         Session::flash('error', 'Something went wrong: ' . $e->getMessage());
    //         return redirect()->back();
    //     }
    // }
    public function update(Request $req) // Update data
    {
        try {
            $req->validate([
                'room_id' => 'required',
                'room_name' => 'required|string|max:191',
                'room_price' => 'required|numeric|min:1',
            ]);

            $existingRoom = DB::table('tblrooms')->where('room_id', $req->input('room_id'))->first();
            $imageName = $existingRoom->room_img; // Get the existing image name

            if ($req->hasFile('room_img')) {
                $image = $req->file('room_img');
                $imageName = '/images/rooms/' . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('/images/rooms'), $imageName);

                // Remove old image if it exists
                if ($existingRoom->room_img && file_exists(public_path($existingRoom->room_img))) {
                    (public_path($existingRoom->room_img));
                }
            }

            $data = [
                'room_name' => $req->input('room_name'),
                'room_price' => $req->input('room_price'),
                'room_desc' => $req->input('room_desc'),
                'room_active' => $req->input('room_active', '1'),
                'room_type_id' => $req->input('room_type_id'),
                'room_img' => $imageName,
                'room_status' => $req->input('room_status'),
                'updated_date' => now(),
            ];

            // Update data in the database
            DB::table('tblrooms')->where('room_id', $req->input('room_id'))->update($data);

            Session::flash('success_update', 'Room Updated successfully.');
            return redirect('admin/tables/basic')->with('success_update', 'Room Updated successfully.');

        } catch (Exception $e) {
            Session::flash('error_update', 'Something went wrong: ' . $e->getMessage());
            return redirect()->back();
        }
    }

   
    public function view(Request $req) // view controller
    {
       
        // $room = DB::table('tblrooms')->where('room_id', $_GET['id'])->first();
        // dd($room);
        // return view('subpage/view');

      
    }

    
    public function destroy(Request $request, $id)// Delete Data Controller 
    {
        $idata = DB::table('tblrooms')
            ->where('room_id', $id)
            ->update(['room_active' => '0']);

        return redirect('admin/tables/basic')->with('success_delete', 'Room deactivated successfully');
    }

}
