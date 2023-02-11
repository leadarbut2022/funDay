
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
       
    <!-- <link rel="stylesheet" href="css/index.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

     <!-- plugin css for this page -->
     <link
     rel="stylesheet"
     href="assets/vendors/mdi/css/materialdesignicons.min.css"
   />
   <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />

   <!-- End plugin css for this page -->
   <link rel="shortcut icon" href="assets/images/favicon.png" />

   <!-- inject:css -->
   <link rel="stylesheet" href="css/style.css"> 
   <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/between//log.css">
     <link rel="stylesheet" id="lin_css" href="css/between/log_clint.css">
    <title>Document</title>
</head>
<body style="color: black">















          
    <div class="container">
      






   
    <div id="login">
   
        <div class="container">

        <section class="log_clint">
    
            <div id="login-row" class="row justify-content-center align-items-center">

            <div style="width: 51%;">

       




                            
                            <div id="login-column" class="col-md-6">
                                <div id="login-box" class="col-md-12">
                                    <form action="loginadmin" id="login-form" class="form"  method="POST">
                                       

                                        @if (Session::get('fill'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('fill') }}
                                            </div>
                                        @endif
                                        @csrf
                                        <div class="form-group">
                                            <label for="username" class="text-info">البريد الاليكتروني</label><br>
                                            <input type="email" name="email" id="number" value="{{ Cookie::get('emailadmin'); }}" class="form-control">
                                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-info">كلمه المرور</label><br>
                                            <input type="text" name="password_" id="password"  value="{{ Cookie::get('passwordadmin'); }}" class="form-control">
                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="remember-me" class="text-info"><span style="color: black">تذكرني</span> <span><input id="remember-me" name="remember_me" type="checkbox"></span></label><br>
                                            <input type="submit" name="log_clint" class="btn btn-info btn-md btn-block" value="submit">
                                        </div>
                                        <div class="form-group row">
                                          {{-- <div class="col-md-6 offset-md-4">
                                              <div class="checkbox">
                                                  <label>
                                                      <a href="{{ route('shoe_pass_page_reset') }}">تغيير كلمه السر</a>
                                                  </label>
                                              </div>
                                          </div> --}}
                                            {{-- <a href="{{ route('shoe_pass_page_reset') }}" style="margin-top: 0px !important;background: green;color: #ffffff;padding: 5px;border-radius:7px;" class="ml-2">
                                              <strong>Facebook Login</strong>
                                            </a>  --}}
                                      </div>
                                        <div id="register-link" class="text-right">
                                            {{-- <a href="{{ route('') }}" class="text-info" style="color: black">او يمكنك انشاء حساب</a> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>

                </section>




    <section class="log_tager">



















            </div>
        </div>
    </div>

   

    </div>
<br><br>







       
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <!-- inject:js -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- plugin js for this page -->
      <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
      <!-- End plugin js for this page -->
      <!-- Custom js for this page-->
      <script src="./assets/js/demo.js"></script>
      <script src="./assets/js/jquery.easeScroll.js"></script>
      <!-- End custom js for this page-->
    
        <script src="js/index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    

 <script src="js/between/log.js"></script>

</body>
</html>

