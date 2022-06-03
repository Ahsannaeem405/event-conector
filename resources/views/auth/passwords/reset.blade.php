<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <h1>Hello Again!</h1>
        <p>Event Management</p>
           <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
           
            
            
           
            <input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <input id="password" type="password" placeholder="{{ __('Password')}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <input id="password-confirm" placeholder="{{ __('Confirm Password')}}" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
        </form>
        
    </div>
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script>
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        @endif
        @if (Session::has('status'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('status') }}");
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
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
        $(document).ready(function(){
   
});
</script>




