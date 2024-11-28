<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\password_reset_token;
class makan_site_view extends Controller
{
    public function password_reset(Request $request)
    {
        $token=$request->token;
        $email=$request->email;

        $check_if_token_email_is_valid=password_reset_token::where("email",$email)->where('token',$token)->first();

        if($check_if_token_email_is_valid)
        {

            return view('site.resetpassword',compact('token','email'));
        }
        else{
            
        }
        
    }
}
