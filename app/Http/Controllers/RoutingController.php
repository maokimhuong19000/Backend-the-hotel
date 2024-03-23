<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoutingController extends Controller
{
    public function __construct()
    {
        // $this->
        // middleware('auth')->
        // except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Auth::user()) {
            return redirect('admin.index');
        } else {
            return redirect('login');
        }
    }

    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root(Request $request, $first)
    {
            $mode = $request->query('mode');
            $demo = $request->query('demo');
            if ($first == "assets")
                return redirect('home');
            return view($first, ['mode' => $mode, 'demo' => $demo]);
    }

    /**
     * second level route
     */
    public function secondLevel(Request $request, $first, $second)
    {
        $mode = $request->query('mode');
        $demo = $request->query('demo');
        if ($first == "assets")
            return redirect('home');
        $room = DB::table('tblrooms')
            ->select(
                'tblrooms.room_id',
                'tblrooms.room_name',
                'tblrooms.room_price',
                'tblrooms.room_status',
                'tblrooms.room_desc',
                'tblrooms.room_active',
                'tblrooms.room_type_id',
                'tblrooms.room_img',
                'tblroomtypes.room_type_name'
            )
        ->join('tblroomtypes', 'tblrooms.room_type_id', '=', 'tblroomtypes.room_type_id')
        ->where('room_active', '1')
        ->orderBy('room_id', 'asc')
        ->paginate(config('app.row'));
        // ->get();
        $roomtype = DB::table('tblroomtypes')
        ->select('room_type_id', 'room_type_name')
        ->get();
        return view($first . '.' . $second, ['mode' => $mode, 'demo' => $demo], compact('room', 'roomtype'));
    }
    /**
     * third level route
     */
    public function thirdLevel(Request $request, $first, $second, $third)
    {
        $mode = $request->query('mode');
        $demo = $request->query('demo');
        if ($first == "assets")
            return redirect('home');
        return view($first . '.' . $second . '.' . $third, ['mode' => $mode, 'demo' => $demo]);
    }   
}
