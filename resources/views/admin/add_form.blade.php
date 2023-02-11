@extends('layout/layout')

@section('add_form')
    
<style>
  button{
    border-radius: 9px;
    background: rgb(3, 207, 222);
  }
</style>

<div class="container">

  <a class="" href="{{ route('signoutaddformerson') }}">logout</a>       


<br>
<br>
<br>
<br>


<div class="alert alert-primary">
  <b>{{ $num_selers }}</b> <b> - </b>  <b>عدد التذاكر </b>
</div>

@if (Session::get('email'))
<div class="alert alert-danger">
    {{ Session::get('email') }} 
</div>
@endif

    <form action="add_user_" method="POST">
      @csrf
        <div class="row">
          <div class="col-3">
            <input type="text" name="name" class="form-control" placeholder=" name">
          </div>
          <div class="col-3">
            <input type="text" name="id_" class="form-control" placeholder="gmail">
          </div>
          <div class="col-3">
            <input type="text" name="phone" class="form-control" placeholder="Phone">
          </div>  
          <div class="col-3">
            <input type="text" name="addres" class="form-control" placeholder="addres">
          </div>  
        </div>
        <br>
        <div class="row">
          <div class="col-3">
            <input type="text" name="id_coleg" class="form-control" placeholder="id">
          </div>  

          <div class="col-3">
            {{-- <input type="text" name="id_coleg" class="form-control" placeholder="id"> --}}
          </div>  

          <div class="col-3">
            {{-- <input type="text" name="id_coleg" class="form-control" placeholder="id"> --}}
          </div>  

    
          <div class="col-3">
            <input type="submit" class="btn btn-success btn-lg"  value="Add">
          </div>  
        </div>
      </form>






    <hr>

        <table class="table">
            <thead>
            <tr>

                <th scope="col">Name</th>
                {{-- <th scope="col">ID</th> --}}
                <th scope="col">phone</th>
                <th scope="col">addres</th>
                <th scope="col">more</th>
            </tr>
            </thead>
            <tbody>

              @foreach ($all as $item)

            <tr>
   

                <td>{{ $item->name }}</td>
                {{-- <td>{{ $item->id_code }}@sha.ha.edu.eg</td> --}}
                <td>{{ $item->phone }}</td>
                <td>{{ $item->addres }}</td>
                <td><a href="qr_v_img?id={{ $item->id }}?id_coleg={{ $item->id_code  }}"> <button>Tiket</button></a></td>
               
                <td>
                  <form action="sendmail" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id_code }}">
                    <input type="hidden" name="link" value="{{ $item->tik_id_qr }}">
                    <input type="submit" value="re Send link">
                  </form>
                </td>
                {{-- <td><a href="sendmail?id_code={{ $item->id_code }}?link={{ $item->tik_id_qr }}"> <button>re Send link</button></a></td> --}}
            </tr>
            @endforeach
      
            </tbody>
        </table>

<br><br><br><br>
</div>

@endsection