<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\imgqr;
use App\Models\users;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Mail\yourtiket;
use App\Models\User;
use App\Models\users_hide;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller




{


    public function home(Request $request){
        $all=users::latest()->get();
        $num_selers=users::count();
                return view('admin/add_form',compact('all','num_selers'));
    }











    public function add_user(Request $request){



        $request->validate([
            'name' =>'required',
            'id_' =>'required',
            'phone'=>'required',
            'addres' =>'required',
            'id_coleg'=>'required',
          
             ]);


             $regestersuccess='';
             $emailexets='';
             $users = users::where('id_code', $request->id_)->get();
     
             # check if email is more than 1
     
             if(sizeof($users) > 0){
                 # tell user not to duplicate same email
                 $emailexets=true;
                //  return response()->json(['message' => trans('response.failed'),compact('emailexets')], 444);
                return back()->with('email','البريد موجود بالفعل');

                 
             }

      
             users::create(

                [
                     'name' => $request->name,
                     'id_code' => $request->id_,
                     'phone' => $request->phone,
                     'addres' => $request->addres,
                     'id_coleg' => $request->id_coleg,
                    //  'tik_id_qr' => $tik_id_qr,
                 ]);

                 $userinfo=users::where('id_code','=',$request->id_)->first();



                 $tik_id_qr='http://127.0.0.1:8000/qr_v_img?id='. $userinfo->id .'?rand='.Str::random(8). $request->id_;


                 users::where('id_code', $request->id_)
                 ->update([
                      'tik_id_qr' => $tik_id_qr,
                ]);

                $maill=$request->id_;
                Mail::to($maill)->send(new yourtiket($tik_id_qr));

                $all=users::latest()->get();
             return redirect()->back()->with('sacsess',compact('all'));
       

    }





    public function qr_v_img(Request $request){

          $id= $request->id;
          $id_code= $request->id_code;

 



          $userinfo=users::where('id','=',$id)->get();
     




        $all=$userinfo;
     
        return view('admin/img_v',compact('all'));
    }
















    
    // public function whatsappNotification(string $recipient)
    // {
    //     $sid    = getenv("TWILIO_AUTH_SID");
    //     $token  = getenv("TWILIO_AUTH_TOKEN");
    //     $wa_from= getenv("TWILIO_WHATSAPP_FROM");
    //     $twilio = new ($sid, $token);
        
    //     $body = "Hello, welcome to codelapan.com.";

    //     return $twilio->messages->create("whatsapp:$recipient",["from" => "whatsapp:$wa_from", "body" => $body]);
    // }



    public function add_user_admin(Request $request){



        $request->validate([
            'name' =>'required',
            'id_' =>'required',
            'phone'=>'required',
            'addres' =>'required',
            'id_coleg'=>'required',
          
             ]);


             $regestersuccess='';
             $emailexets='';
             $users = users::where('id_code', $request->id_)->get();
     
             # check if email is more than 1
     
             if(sizeof($users) > 0){
                 # tell user not to duplicate same email
                 $emailexets=true;
                //  return response()->json(['message' => trans('response.failed'),compact('emailexets')], 444);
                return back()->with('email','البريد موجود بالفعل');

                 
             }

      
             users::create(

                [
                     'name' => $request->name,
                     'id_code' => $request->id_,
                     'phone' => $request->phone,
                     'addres' => $request->addres,
                     'id_coleg' => $request->id_coleg,
                    //  'tik_id_qr' => $tik_id_qr,
                 ]);

                 $userinfo=users::where('id_code','=',$request->id_)->first();



                 $tik_id_qr='http://127.0.0.1:8000/qr_v_img?id='. $userinfo->id .'?rand='.Str::random(8). $request->id_;


                 users::where('id_code', $request->id_)
                 ->update([
                      'tik_id_qr' => $tik_id_qr,
                ]);

                $maill=$request->id_;
                Mail::to($maill)->send(new yourtiket($tik_id_qr));
                
                $all=users::latest()->get();
             return redirect()->back()->with('sacsess',compact('all'));
       

    }




    



















    public function add_user_admin_hide(Request $request){



        $request->validate([
            'name' =>'required',
            'id_' =>'required',
            'phone'=>'required',
            'addres' =>'required',
            'id_coleg'=>'required',
          
             ]);



             $regestersuccess='';
             $emailexets='';
             $users = users::where('id_code', $request->id_)->get();
     
             # check if email is more than 1
     
             if(sizeof($users) > 0){
                 # tell user not to duplicate same email
                 $emailexets=true;
                //  return response()->json(['message' => trans('response.failed'),compact('emailexets')], 444);
                return back()->with('email','البريد موجود بالفعل');

                 
             }


      
             users_hide::create(

                [
                     'name' => $request->name,
                     'id_code' => $request->id_,
                     'phone' => $request->phone,
                     'addres' => $request->addres,
                     'id_coleg' => $request->id_coleg,
                    //  'tik_id_qr' => $tik_id_qr,
                 ]);

                 $userinfo=users_hide::where('id_code','=',$request->id_)->first();



                 $tik_id_qr='http://127.0.0.1:8000/qr_v_img_hide?id='. $userinfo->id .'?rand='.Str::random(8). $request->id_;


                 users_hide::where('id_code', $request->id_)
                 ->update([
                      'tik_id_qr' => $tik_id_qr,
                ]);

                $maill=$request->id_;
                Mail::to($maill)->send(new yourtiket($tik_id_qr));
                
                $all=users::latest()->get();
             return redirect()->back()->with('sacsess',compact('all'));
       

    }










        
    public function qr_v_img_hide(Request $request){

        $id= $request->id;
        $userinfo=users_hide::where('id','=',$id)->get();

      $alll=$userinfo;
   
      return view('admin/img_v_hide',compact('alll'));
    }







public function send(Request $request){

  
    $request->validate([
        'link' =>'required',
        'id' =>'required',

      
         ]);


        $tik_id_qr=$request->link;
        

        $mm= $request->id;

        Mail::to($mm)->send(new yourtiket($tik_id_qr));

        $all=users::latest()->get();
        return redirect()->back()->with('sacsess',compact('all'));
      
                
    }



}