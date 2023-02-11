@extends('layout/layout')


@section('dashbord')


<div class="container">

    <section id="reg_clint" class="reg_clint">     
                           
        <a class="" href="{{ route('signoutadmin') }}">logout</a>       




        <div class="panel-heading">
       
          <h3 class="panel-title">انشاء حساب لاضافه تذاكر  </h3>
         </div>
         <div class="panel-body">
          <form action="add_tiketman_" method="POST">
                        @csrf
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder=" اسم العميل">
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                </div>
              </div>
            
            </div>
       
            <div class="form-group">
              <input type="text" name="email" id="email" class="form-control input-sm" placeholder="البريد الا لكتروني">
                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                  
          </div>
        
 

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="password" name="password_" id="password_user" class="form-control input-sm" placeholder="الرقم السري">
                                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                </div>
              </div>
       
        
               
          
       
       
                        
                                    
              {{-- <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="تأكيد الرقم السري">
                </div>
              </div> --}}
            
            </div>
            
            <input type="submit" name="sub_clint"  value="انشاء حساب" class="btn btn-info btn-block">
          
          </form>
           
                </section>  
   



<hr>
<hr>




<div class="panel-heading">
       
    <h3 class="panel-title">انشاء حساب  مدير  </h3>
   </div>
   <div class="panel-body">
    <form action="add_admin_" method="POST">
                  @csrf
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="text" name="name" id="first_name" class="form-control input-sm" placeholder=" اسم العميل">
                  <span class="text-danger">@error('name'){{ $message }} @enderror</span>
          </div>
        </div>

       
      
      </div>
 
      <div class="form-group">
        <input type="text" name="email" id="email" class="form-control input-sm" placeholder="البريد الا لكتروني">
                      <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            
    </div>
  

         
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password_" id="password_user" class="form-control input-sm" placeholder="الرقم السري">
                              <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                          </div>
        </div>
 
 
                  
                              
        {{-- <div class="col-xs-6 col-sm-6 col-md-6">
          <div class="form-group">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="تأكيد الرقم السري">
          </div>
        </div> --}}
      
      </div>
      
      <input type="submit" name="sub_clint"  value="انشاء حساب" class="btn btn-info btn-block">
    
    </form>
     
 


    <div class="panel-heading">
      @if (Session::get('email'))
      <div class="alert alert-danger">
          {{ Session::get('email') }}
      </div>
      @endif
        <h3 class="panel-title">انشاء  تذاكر  </h3>
       </div>
       <div class="panel-body">
        <form action="add_user_admin" method="POST">
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
        <hr>
        <hr>
        <hr>
        <hr>




    <div class="panel-heading">
      @if (Session::get('email'))
      <div class="alert alert-danger">
          {{ Session::get('email') }}
      </div>
      @endif
      <h3 class="panel-title">  hide انشاء  تذاكر  </h3>
     </div>
     <div class="panel-body">
      <form action="add_user_admin_hide" method="POST">
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
       







@endsection



