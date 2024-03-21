<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Events\MessageSent;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use Telegram\Bot\Laravel\Facades\Telegram;

class MasterController  extends Controller
{
   public function master(){
      $getData=DB::table('tblrooms')
      ->where('room_active','1')
      // ->first();
      ->get();
    return view('frontend.master',compact('getData'));
   }
//FACILITIESS 
//Data control controller
   public function roomlist1(){
      $getData=DB::table('tblrooms')
      ->where('room_active','1')
      ->get();
      return view('frontend.room-list-1',compact('getData'));
   }
   public function roomlist2(){
      $getData=DB::table('tblrooms')
      ->where('room_active','1')
      // ->first();
      ->get();

      return view('frontend.room-list-2',compact('getData'));
   }
   public function roomlist3(){
      return view('frontend.room-list-3');
   }
   public function roomdetailsbooking(){
      return view('frontend.room-details-booking');
   }
   public function roomdetails(){
      $getData=DB::table('tblrooms')
      ->where('room_active','1')
      // ->first();
      ->get();
      return view('frontend.room-details',compact('getData'));
   }
   public function spa(){
      return view('frontend.spa');
   }
   public function restaurant(){
      return view('frontend.restaurant');
   }
   public function package(){
      return view('frontend.package');
   }
   public function blog(){
      return view('frontend.blog');
   }
   
   public function gallery(){
      return view('frontend.gallery');
   }
   public function video(){
      return view('frontend.video');
   }
   public function about(){
      return view('frontend.about');
   }
   public function contacts(){
      return view('frontend.contacts');
   }
   public function testmodel(){
      return view('frontend.testcallmodel');
   }
   public function sendTelegramMessage(){
      return view('frontend.sendTelegramMessage');
   }
}
