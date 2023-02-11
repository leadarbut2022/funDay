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

    <div class="inform_h1">
      <h1>Your Ticket</h1>
 </div>

    @foreach ($alll as $item)
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
                   {{ $item->phone }}
            </div>
        </div>



        <div class="inform_img">
            <img src="img/3.jpg" alt="" srcset="">
        </div>





        @endforeach


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
</div>



@endsection