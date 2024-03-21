<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function sendTelegramMessage(Request $req)
    {
        return view('frontend.info');
    }

    public function sendinfo(Request $req)
    {
        $data = [
            'name' => $req->input('username'),
            'gender' => $req->input('gender'),
            'pass' => $req->input('pwd'),
            'email' => $req->input('email'),
            'address'=>$req->input('address'),
            'checkin_datepicker' => $req->input('checkin_datepicker'),
            'checkout_datepicker' => $req->input('checkout_datepicker'),
            'guest' => $req->input('guest'),
            'description'=>$req->input('description'),
        ];

        // dd($data);

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHAT_ID'),
            'text' => 
                "Name: " . $req->input('username') . "\n" .
                'gender:'.$req->input('gender') . "\n" .
                "Number Phone: " . $req->input('pwd') . "\n" .
                "Email: " . $req->input('email') . "\n" .
                "Address: ". $req->input('address'). "\n".
                "Room Name: " . $req->input('room_name') . "\n" .
                "Guest: " . $req->input('guest') . "\n" .
                "Description: ". $req->input('description'). "\n" .	
                "Check-in Date: " . $req->input('checkin_datepicker') . "\n" .
                "Check-out Date: " . $req->input('checkout_datepicker')
                
                

                
        ]);

        return view('frontend.info', $data);
    }

}
