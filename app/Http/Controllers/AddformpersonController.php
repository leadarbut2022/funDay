<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use App\Models\addformperson;
use Illuminate\Http\Request;

class AddformpersonController extends Controller
{
    

    public function add_tiketman_(Request $request){
 
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password_'=>'required',
           
          
           ]);
    
           $add=addformperson::create(
            [
                 'name' => $request->name,
                 'email' => $request->email,
                 'password_' =>Hash::make( $request->password_),
              
                
                 
                 
                
             ]);
    
                 if ($add->false) {
            return back()->with( 'lol' ,'error');
            
           }else{
            return back()->with('filll','سوف يتم اضافه الحساب');   
    
           }
        
        
    }





    public function loginteketer(Request $request){

        $request->validate([
           
            'email' =>'required',
            'password_' =>'required',
           
 
             ]);

             $userinfo=addformperson::where('email','=',$request->email)->first();

             if (!$userinfo) {
               return back()->with('fill','thiomthong woring');
             }else{
                if (Hash::check($request->password_,$userinfo->password_)) {
                //   $request->session()->put('logednewsPoster',$userinfo->id);
                  $sessions = [
                    'tiketID' => $userinfo->id,
                    'teketNAME' => $userinfo->name,
                ];
        
                $request->session()->put($sessions);

                if($request->has('remember_me')){
                    Cookie::queue('emailtiketer', $request->email, 2629743);
                    Cookie::queue('passwordticeter', $request->password_, 2629743);
                  }
                //   $data = $request->session()->all();
                     return redirect('a__d__u__s__e__r');
                }else{
                    return back()->with('fill','password woring');
                }
             }



       }




       public function signoutaddformerson(Request $request){
 
         

        if (Session()->has('tiketID') && Session()->has('teketNAME') ) {
            Session()->pull('tiketID');
            Session()->pull('teketNAME');
            

            return redirect('/');
        }
    }
        //     public function loginperson(){
 
        //     return view('ticetk_person/login');
            
        // }


                // public function dachbordd(){
 
        //     return view('admin/dashbord');
            
        // }
}




