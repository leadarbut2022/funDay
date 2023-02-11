<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function dachbordd(){
 
            return view('admin/dashbord');
            
        }


        public function add_admin_(Request $request){
 
            $request->validate([
                'name' =>'required',
                'email' =>'required',
                'password_' =>'required',
               
              
               ]);
        
               $add=admin::create(
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



       public function loginAdmin(Request $request){

        $request->validate([
           
            'email' =>'required',
            'password_' =>'required',
           
 
             ]);

             $userinfo=admin::where('email','=',$request->email)->first();

             if (!$userinfo) {
               return back()->with('fill','thiomthong woring');
             }else{
                if (Hash::check($request->password_,$userinfo->password_)) {
                //   $request->session()->put('logednewsPoster',$userinfo->id);
                  $sessions = [
                    'adminID' => $userinfo->id,
                    'adminNAME' => $userinfo->name,
                ];
        
                $request->session()->put($sessions);

                if($request->has('remember_me')){
                    Cookie::queue('emailadmin', $request->email, 2629743);
                    Cookie::queue('passwordadmin', $request->password_, 2629743);
                  }
                //   $data = $request->session()->all();
                     return redirect('dachbordd');
                }else{
                    return back()->with('fill','password woring');
                }
             }



       }


        public function signoutadmin(Request $request){
 
         

                if (Session()->has('adminID') && Session()->has('adminNAME') ) {
                    Session()->pull('adminID');
                    Session()->pull('adminNAME');
                  
        
                    return redirect('/');
                }
            }
            
        


        // public function dachbordd(){
 
        //     return view('admin/dashbord');
            
        // }

        // public function dachbordd(){
 
        //     return view('admin/dashbord');
            
        // }


        

}
