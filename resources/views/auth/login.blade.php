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
    <div class="wrapper" style="">
        <h1>Hello Again!</h1>
        <p>Event Management</p>
         <form method="POST" action="{{ route('login') }}">
                        @csrf


            <input id="email" placeholder="Enter Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            <input id="password"  placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <p class="recover">
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">Recover Password</a>
                @endif
            </p>
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
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
            Not a member? <a href="{{url('register')}}">Register Now</a>
        </div>
    </div>
</body>

</html>


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
