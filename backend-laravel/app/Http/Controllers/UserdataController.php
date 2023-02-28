<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userdata;

class UserdataController extends Controller
{
    public function index(){
        return Userdata::all();
    }
    public function createUser(Request $request){
       $userdata = new Userdata;
       $userdata ->full_name = $request->input('full_name');
       $userdata ->email = $request->input('email');
       $userdata ->password = $request->input('password');
       $userdata ->repeat_pass = $request->input('repeat_pass');
       $userdata->save();

       return response()->json([
        'status'=>200,
        'message'=> 'success',
       ]);
    }
}
