<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
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
            <i class="fab fa-apple"></i>
            <a href="{{ url('auth/facebook') }}"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="not-member">
            Not a member? <a href="#">Register Now</a>
        </div>
    </div>
</body>

</html>