<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\User\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class UserController extends Controller
{
   public function user(){

  //  DB::table("xiaomi")->first();
    $request=Request();
    $val=$request->input("xiaomi");
    return view("xiaomi")->with(['a'=>"清清的"]);
   }
   public function clear(){

    $res=DB::table('goods')->get();
    
    var_dump($res);die;
    return view("welcome");
   }
}
