<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\unite;

use App\Models\units_spec;

use App\Models\password_reset_token;
use Illuminate\Support\Facades\Mail;
use App\Mail\reset_password;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class mobile_app_api extends Controller
{

    public function __construct()
    {
        // $this->middleware(Auth::check())->except(['create_user','login','reset_password','actionresetpassword']);
        // $this->middleware(function ($request, $next) { if (!Auth::check() && !in_array($request->route()->getName(), ['create_user', 'login', 'reset_password', 'actionresetpassword'])) { return response()->json(['message' => 'Unauthorized', 'status' => 'false'], 401); } return $next($request); });
        $this->middleware('auth:sanctum')->except(['login', 'create_user','reset_password','actionresetpassword']);

    }
   /**
     * ****************************
     * *****Start AUTH SECTION*******
     * ****************************
     */
    public function login(Request $request){
        try
        {
      
       
          $credentials = $request->validate([
              'email' => ['required'],
              'password' => ['required'],
          ]);
      
      
          if (Auth::attempt($credentials)) 
          {
                 $user = Auth::user();
                 $token = $user->createToken('MyAppToken')->plainTextToken; 
                 return response()->json([
                    "message"=>['access_token' => $token,
                     'token_type' => 'Bearer',
                     'name'=>$user->name,
                     "email"=>$user->email],
                     "status"=>"true"]);
             } else {
                 return response()->json(['message'=>'',"status"=>"false"]);
             }
        }
      
            catch(\Exception $e){
            return $e->getMessage();
            }
    }
     

 
    public function create_user(Request $request)
    {

            try{
                    $validator = Validator::make($request->all(), [
                        'name' => 'required|string|max:255',
                        'email' => 'required|string|email|max:255|unique:users',
                        'password' => 'required|string|min:8', 
                    
                    ]);
                
                    if ($validator->fails()) {
                        return response()->json(["message"=>$validator->errors(),"status"=>"false"]);
                    
                    }
            
                
                        $new_user=User::create([
                            'name' => $request->name,
                            'email' => $request->email,
                            'password' => hash::make($request->password),
                        ]);

                        $credentials = $request->validate([
                            'email' => ['required', 'email'],
                            'password' => ['required'],
                        ]);
                        if (Auth::attempt($credentials)) 
                    {
                    $user = Auth::user();
                    $token = $user->createToken('MyAppToken')->plainTextToken; 
                    return response()->json([
                    "message"=>['access_token' => $token,
                    'token_type' => 'Bearer',
                    'name'=>$user->name,
                    "email"=>$user->email],
                    "status"=>"true"]);
                     } 
                     else 
                     {
                            return response()->json(['message'=>'',"status"=>"false"]);
                    }

                    // return response()->json(["message"=>"success","status"=>"true"]);
                }
            catch(\Exception $e)
                {
                    return $e->getMessage();
                }
    
    }

    public function reset_password(Request $request)
    {
        $user=User::where("email",$request->email)->first(); //check if user is available in db 
        if($user)
        {
            

            $validator = Validator::make($request->all(), [
                        'email' => 'required|string|email|max:255',
                    ]);
                
                    if ($validator->fails()) 
                    {
                        return response()->json(["message"=>$validator->errors(),"status"=>"false"]);
                    }

                    $user_in_token_table=password_reset_token::where("email",$request->email)->delete();//Check If user in table resets password and remove to insert new token cause email is primary Key
                    if($user_in_token_table)
                    {
                        $token = Str::random(60);
                        $insert_token=password_reset_token::create(["email"=>$request->email,"token"=>$token]);
    
                        if($insert_token)
                        {
                        $data=["token"=>$token,"email"=>$request->email];
    
                        Mail::to($request->email)->send(new reset_password($data)); 
    
                        return response()->json(["message"=>"success","status"=>"true"]);    
                        }  
                    }
                    else
                    {
                        
                        $token = Str::random(60);
                        $insert_token=password_reset_token::create(["email"=>$request->email,"token"=>$token]);

                        if($insert_token)
                        {
                        $data=["token"=>$token,"email"=>$request->email];

                        Mail::to($request->email)->send(new reset_password($data)); 

                        return response()->json(["message"=>"success","status"=>"true"]);    
                        }  
                    }
                   
                   
                  
                    
           
        }
        else{
             return response()->json(["message"=>"User Not Found","status"=>"false"]);    
        }
      
            
    
    } 
    
    public function actionresetpassword(Request $request)
    {
       $email=$request->email;
       $token=$request->token;
       $check_data=password_reset_token::where("email",$email)->where("token",$token)->first();
       if($check_data)
       {
       
        $changed_data=User::where("email",$email)->update(["password"=>hash::make($request->password)]);
        // $delete_reset_password_table=password_reset_token::where("email",$email)->delete();
        return '
                <!DOCTYPE html>
                <html>
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <body class="w3-container">

                <h2></h2>
                <p></p>

                <div class="w3-panel w3-pale-green w3-border">
                <h3>Successfully !</h3>
                <p>Your Password Was Reset Success </p>
                </div>


                </body>
                </html>';
       }
       
       else{
        return "sssssss";
       }

            
    
    }

    /**
     * ****************************
     * *****END AUTH SECTION*******
     * ****************************
     */

    /**
     * ****************************
     * *****Start Unit SECTION*******
     * ****************************
     */

    // INSERT NEW UNIT 
     public function insert_unit(Request $request){
        $validator = Validator::make($request->all(), [
            "title"=>'required|string',
            'price' => 'required|numeric',
            'min_amount' => 'required|numeric',
            'number_of_bathroom' => 'required|numeric', 
            'number_of_bedroom' => 'required|numeric',
            'number_of_kitchen' => 'required|numeric',
            'description' => 'required|string',
           'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
    
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors(),"status"=>"false"]);
        
        }
        $serializedImagePaths=[];
        if($request->hasFile('images')) 
        { 
            $imageNames = [];
            foreach ($request->file('images') as $image) 
            {
                $imageName = time() . '_.' . $image->extension();
                $imageNames[] = $imageName;
                $image->move(public_path('units'), $imageName);
            }
            $serializedImagePaths = json_encode($imageNames);
        }
        
        $insert_new_unit=unite::create([
            "title"=>$request->title,
            "price"=>$request->price,
            "min_amount"=>$request->min_amount,
            "number_of_bathroom"=>$request->number_of_bathroom,
            "number_of_bedroom"=>$request->number_of_bedroom,
            "number_of_kitchen"=>$request->number_of_kitchen,
            "description"=>$request->description,
            "taken_percantage"=>0,
            "status"=>"available",
            "area"=>$request->area,
            "images"=>$serializedImagePaths
        ]);
            if($insert_new_unit)
            {
                return response()->json(["message"=>"","status"=>"true"]);
                // return json_decode($serializedImagePaths);
            }
    }

    //INSERT SHARE 
    public function insert_share(Request $request){
        $validator = Validator::make($request->all(), [
           
            'unit_id' => 'required|numeric',
            'amount_per_share' => 'required|numeric',
        ]);

    
        if ($validator->fails()) {
            return response()->json(["message"=>$validator->errors(),"status"=>"false"]);
        
        }
        $minimum_amount_per_share=unite::where("id",$request->unit_id)->first('min_amount');//return minimum amount per share
        $price_of_unit=unite::where("id",$request->unit_id)->first('price');//return price of unit to calculate percentage 
   

       

        //check first if unit_id is  available in tables unites or not
        $unit_if_available=unite::where('id',$request->unit_id)->first();
        if(!$unit_if_available)
        {
            return response()->json(["message"=>"this unit isn't available","status"=>"false"]);
        }
        // calculate percantage of input unit 
        $calculate_percantage=(floatval($request->amount_per_share))/(floatval($price_of_unit->price))*100;

        // Get Taken Percantage to check if available shares or not
        $get_taken_percantage=unite::where("id",$request->unit_id)->first('taken_percantage');

        if($calculate_percantage+$get_taken_percantage->taken_percantage>100)
        {
            return response()->json(["message"=>"Sorry This cannot share in this unit at current time so last chance current taken percantage is ". 100- $get_taken_percantage->taken_percantage."%","status"=>"false"]);
        }
        if(($calculate_percantage+$get_taken_percantage->taken_percantage) == 100)
        {
            $insert_share=units_spec::create([
                "user_email"=>auth::user()->email,
                "unit_id"=>$request->unit_id,
                "amount_per_share"=>$request->amount_per_share,
                "percantage"=>$calculate_percantage,
                "approved"=>1
                ]);

                if($insert_share)
                {
                    $edit_percantage_in_unit_table=unite::where('id',$request->unit_id)->update(["status"=>"funded","purchase_date"=>date("Y/m/d"),"taken_percantage"=>$calculate_percantage+$get_taken_percantage->taken_percantage]);
                    return response()->json(["message"=>"success to share"]);
                }
        }

        if($get_taken_percantage->taken_percantage==100 )
        {
            $edit_status_in_unit_table=unite::where('id',$request->unit_id)->update(["status"=>"funded","purchase_date"=>date("Y/m/d")]);
            return response()->json(["message"=>"Sorry This Unit was sold out","status"=>"false"]);
        }
        else{
               
            
            $insert_share=units_spec::create([
                "user_email"=>auth::user()->email,
                "unit_id"=>$request->unit_id,
                "amount_per_share"=>$request->amount_per_share,
                "percantage"=>$calculate_percantage,
                "approved"=>1
                ]);

                if($insert_share)
                {
                    $edit_percantage_in_unit_table=unite::where('id',$request->unit_id)->update(["taken_percantage"=>$calculate_percantage+$get_taken_percantage->taken_percantage]);
                    return response()->json(["message"=>"success to share"]);
                }
        }


        
    }
// Display Data Of Units
public function get_units(){

    try{
            $return_with_status_available=unite::where("status","available")->orderBy('id',"desc")->get();
            foreach ($return_with_status_available as $item) {
                $item->images = json_decode($item->images, true);
            }

            $return_with_status_funded=unite::where("status","funded")->orderBy('id',"desc")->get();

            foreach ($return_with_status_funded as $item) {
                $item->images = json_decode($item->images, true);
            }

            $return_with_status_exit=unite::where("status","exit")->orderBy('id',"desc")->get();

            foreach ($return_with_status_exit as $item) {
                $item->images = json_decode($item->images, true);
            }

            $data=["available"=>$return_with_status_available,"funded"=>$return_with_status_funded,"exit"=>$return_with_status_exit];
                
                return response()->json(["message"=>$data,"status"=>true]);
            }
            catch(\Exceprtion $e)
            {
                return response()->json(["message"=>"","status"=>"false"]);
            }
}

}
