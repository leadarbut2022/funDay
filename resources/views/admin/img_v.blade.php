@extends('layout/layout')

@section('img_qr')
<style>
body{
    background: -webkit-linear-gradient(#47A6DC, #1B201E);
}

.container{
    background: -webkit-linear-gradient(#47A6DC, #1B201E);
}
</style>
<br>



<div class="container">


    

    @if (Session::get('email'))
<div class="alert alert-danger">
    {{ Session::get('email') }} 
</div>
@endif

    <div class="inform_h1">
      <h1>Your Ticket</h1>
 </div>

    @foreach ($all as $item)
    <div class="qr_img">
             
            
                {{-- {!! QrCode::size(250)->generate( ' {{ $item->tik_id_qr }} '); !!} --}}
                {!! QrCode::size(250)->backgroundColor(27, 32, 30, 0.86) ->generate($item->tik_id_qr) !!}
            
            
    </div>

        <div class="form_vew">

            <div class="inform">
                   {{ $item->name }}
            </div>
            <div class="inform">
                   {{ $item->id_code }}
            </div>
            <div class="inform">
                   {{ $item->id_coleg }}
            </div>

            {{-- <div class="inform">
                {{ $count }} <span>عدد المرافقين</span>
         </div> --}}
        </div>



        <div class="inform_img">
            <img src="img/3.jpg" alt="" srcset="">
        </div>





        @endforeach


        <br>
      
  
</div>

{{-- 
<footer>
    <div class="colwrapper">
    

           
                <div class="fltcol"><a href="https://binary-ac.ml/"><h3> ©2023 by Binary </h3></a><span> Ahmed elshami</span>
                                                     </div>

                {{-- <div class="fltcol"><span> Ahmed elshami</span>
                </div> --}}
        

        
        
  
    {{-- </div>
</footer> --}} 


@endsection