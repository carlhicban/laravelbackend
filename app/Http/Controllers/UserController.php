<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $request){
        $user = User::where('email','=',$request->email)->first();
      
        if($user){
            $userPass = $user->password;
            $reqPass = Hash::make($request->password);
            
            if(Hash::check($request->password,$user->password)){
                return response($user,200);
            }else{
                return response()->json(['message','Password did not match'],404);
            }
        }else{
            return response()->json(['message','User not found'],404);
        }
    }
}
