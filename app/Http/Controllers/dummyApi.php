<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Chatuser;
use Storage;

class dummyApi extends Controller
{
    public function dummydata(){
        $products = Chatuser::get();
        return $products;
    }

    public function editdata(Request $req){
        
        $idee = $req->email;
        $user = Chatuser::where('email',$idee)->first();
        $user->active_status = $req->active_status;
        $user->save();
    }

    public function create(Request $req){
        
        $user = new Chatuser;
        $user->name = $req->name;
        $user->status = $req->status;
        $user->email = $req->email;
        $user->image = $req->image;
        $user->msgsCount = 0;
        $user->active_status = 'disconnect';
        // $user->password = Hash::make($req->password);
        $user->password = $req->password;
        $user->save();
    }

    public function login(Request $req){
        $idee = $req->email;
        $user = Chatuser::where('email',$idee)->first();
        if($req->email == $user->email && $req->password == $user->password){
            return response()->json(['user'=>$user,'success' => 'authorized','status' => '200'], 200);
        }else{
            return response()->json(['error' => 'Unauthorized','status' => '401'], 401);
        }
    }

    public function storeImg(Request $img){
        dd($img);

        $image = $img->image;  // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = str_random(10).'.'.'jpg';
        \File::put(storage_path(). '/' . $imageName, base64_decode($image));
    }
}
