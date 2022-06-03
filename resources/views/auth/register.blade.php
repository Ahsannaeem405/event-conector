<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
        <link rel="stylesheet" href="{{asset('css/login.css')}}">

    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    

<body>
    <div class="wrapper">
        <h1>Welcome!</h1>
        <p>Event Management</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
           
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name">

                               
            <input type="text" placeholder="Enter Your Number" name="phone">
            <input type="text" placeholder="Enter Your Address"  name="address">



            <input  type="email" placeholder="Enter Your Email" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ old('name') }}" required autocomplete="name" autofocus>

            
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your New Password">

           
           <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

        <button type="submit" class="btn btn-primary">
            {{ __('Register') }}
        </button>
        </form>
        <p class="or">
            ----- or continue with -----
        </p>
        <div class="icons">
            <a href="{{ url('auth/google') }}">
                    
                <i class="fab fa-google"></i></a>
             <a href="{{ url('auth/facebook') }}"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="not-member">
            Already have account? <a href="{{url('login')}}">Login Now</a>
        </div>
    </div>
</body>


    <!-- aos animaitons -->
    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script>
        @if (Session::has('success'))
            toastr.options = {
               
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif

            @if (Session::has('info'))
            toastr.options = {
               
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if($errors->any())
            toastr.options = {
                
                "progressBar": true
            }
           
             @foreach ($errors->all() as $error)
              toastr.error("{{ $error }}");
         
             @endforeach
        @endif

        @if (Session::has('warning'))
            toastr.options = {
              
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
        $(document).ready(function(){
   
});
    </script>

</html>