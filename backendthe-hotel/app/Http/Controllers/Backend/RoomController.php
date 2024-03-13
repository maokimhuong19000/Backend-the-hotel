<?php

// Namespace declaration
namespace App\Http\Controllers\Backend;

// Importing necessary classes
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

// Class declaration
class RoomController extends Controller
{
    // Store Data Controller method
    public function store(Request $req)
    {
        try {
            // Extracting data from the request
            $data = [
                'room_id' => $req->input('room_id'),
                'room_name' => $req->input('room_name'),
                'room_price' => $req->input('room_price'),
                'room_desc' => $req->input('room_desc'),
                'room_active' => $req->input('room_active', '1'),
                'room_type_id' => $req->input('room_type_id'),
                'created_date' => now(),
                'updated_date' => now(),
                'deleted_date' => now(),
            ];

         
            $i = DB::table('tblrooms')->insert($data);
            // dd($data);
           
            if ($i) {
                return redirect('pages/starter')->with('success', 'Room created successfully');
            }
        } catch (Exception $e) {
            // Handling exceptions and echoing the error message
            echo $e->getMessage();
        }
    }



    // Delete Data Controller 
    public function destroy(Request $request, $id){
        $idata = DB::table('tblrooms')
            ->where('room_id', $id)
            ->update(['room_active' => '0']);
     
        return redirect('tables/basic')->with('success', 'Room deactivated successfully');
    }
    
}
