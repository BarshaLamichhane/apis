<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\AccessToken;
use Illuminate\Support\Str;
class AuthController extends Controller
{
    //
    public function authenticate(Request $request){
        if(Auth::attempt($request->all())){
            // $access_token = md5(md5(md5(Str::random(70))));
            // $user_id = Auth::id();
            $object = array("access_token" => md5(md5(md5(Str::random(70)))), "user_id" => Auth::id());
            return AccessToken::create($object);
        }else{
            abort(401);
        }
    }
}
