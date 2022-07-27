@section("head")
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport"
          content="initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="content-type"
          content="text/html; charset=UTF-8"/>
    <title>Event Management</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/restaurant.css') }}">
    <link rel="stylesheet" href="{{ asset('css/chatboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jqueryui.css') }}">

    <style>
        .disableddiv {
            pointer-events: none;
            opacity: 0.4;
        }

        .pointer {
            cursor: pointer;
        }

        .select2-container {
            width: 100% !important;
        }

        .select2-search__field {
            position: absolute;
            margin:10px !important;
        }
        .select2-selection__rendered li{

            border-radius: 25px !important;

        }
    </style>


    {{--    dropify--}}
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

    {{--   bootstrap 5--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    {{--    owl carusal--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>


    {{--toster--}}

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    {{--    google places api--}}


</head>

<body class="">
@include('partials.component2')
<section class="navigationBar mb-5 pb-5">
    <nav class="navbar navbar-expand-lg shadowDiv fixed-top bg-white navbar-light py-md-3 text-black px-lg-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <a class="navbar-brand fontw700 font-24" href="{{url('/')}}">Emprise</a>
            <div class="collapse navbar-collapse ps-md-3" id="navbarTogglerDemo03">
                <ul class="navbar-nav  me-md-auto mb-2 mb-md-0" id="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link active pt-md-3 fontw500" aria-current="page"
                           href="{{ url('/') }}">Home</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active pt-md-3 fontw500" href="{{ url('search') }}">Find
                            restaurants</a>
                    </li>

                    @auth
                        @if(auth()->user()->role=='2')
                            <li class="nav-item">
                                <a class="nav-link active pt-md-3 fontw500" href="{{ url('/user/planner') }}">My
                                    Restaurants</a>
                            </li>

                        @endif

                        <li class="nav-item">
                            <a class="nav-link active pt-md-3 fontw500" href="{{ url('/user/chatBoard') }}">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active pt-md-3 fontw500"
                               href="{{ url('/user/favourites') }}">favourites</a>
                        </li>

                    @endauth


                </ul>
                @guest

                    <div class="hostEvent">
                        <h6 class="pe-3 pt-2 fontw700 font-18"><a href="{{ url('/user/event') }}">Host An Event</a></h6>
                    </div>
                @endguest

                @auth
                    @if(auth()->user()->role=='3')

                        <div class="hostEvent">
                            <h6 class="pe-3 pt-2 fontw700 font-18"><a href="{{ url('/user/login/event') }}">Host An
                                    Event</a></h6>
                        </div>
                    @endif
                @endauth

                @auth

                    <a class="btn rounded-pill btn-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <a href="{{ url('/login') }}">
                        <button class="btn" type="submit">Login</button>
                    </a>
                    <a href="{{ url('/register') }}">
                        <button class="btn rounded-pill btn-green" type="button">Sign up</button>
                    </a>
                @endauth

            </div>
        </div>
    </nav>
</section>

<!-- NavBar section end -->


@yield('body')




@section("footer")

    <!-- footer section -->
    <section class="footer mt-5 pt-5">
        <div class="container">
            <div class="row border-bottom">
                <div class="col-md-6">
                    <div class="link-contact ">
                        <div class="d-flex">
                            <div class="quick-link">
                                <i class="fa fa-plus-circle pe-3" aria-hidden="true"></i>
                                <a href="#" class="text-black text-decoration-none fontw700">QuicK Links</a>
                            </div>
                            <div class="ms-4">
                                <p class="fonwt500 text-grey-two">Explore More Categories</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="d-flex justify-content-end">
                        <p class="fontw500"><span>021-323-323-22</span> | <span>hello@gmail.com</span></p>
                    </div>
                </div>
            </div>

            <div class="row border-bottom">
                <div class="col-md-12">
                    <h4 class="my-3 text-seagreen1">Get in touch</h4>
                </div>
                <div class="col-md-6 z1">
                    <div class="temp">
                        <h2 class="fontw700">Adventures Calling <br/>You guys!</h2>
                    </div>
                </div>
                <div class="offset-md-2 col-md-4 z1 my-3">
                    <div class="banking d-flex justify-content-center">
                        <div class="bankingCard pe-3 ">
                            <a href="#"><i class="fa fa-credit-card-alt p-3 faa-icon text-seagreen1"
                                           aria-hidden="true"></i></a>
                        </div>
                        <p class="pb-0 mb-0 fontw500">Our Office <br/> <span class="fontw700"> Lahore, Pakistan</span>
                        </p>
                    </div>
                    <div class=" py-2 me-4 text-center">
                        <a href="#" class="z1 text-white fontw500"><i class="fa fa-long-arrow-right"
                                                                      aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <h5>Services</h5>
                            <ul class="list-unstyled unoderList text-grey-three">
                                <li class="mb-2 font-14">Budget</li>
                                <li class="mb-2 font-14">Expert</li>
                                <li class="mb-2 font-14">Independent</li>
                                <li class="mb-2 font-14">Luxury Tour</li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-6 mb-3">
                            <h5>Adventures</h5>
                            <ul class="list-unstyled unoderList text-grey-three">
                                <li class="mb-2 font-14">Beach Activity</li>
                                <li class="mb-2 font-14">Bungee Jump</li>
                                <li class="mb-2 font-14">City Tour</li>
                                <li class="mb-2 font-14">Hiking Trip</li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-6 mb-3">
                            <h5>Country</h5>
                            <ul class="list-unstyled unoderList text-grey-three">
                                <li class="mb-2 font-14">Beach Activity</li>
                                <li class="mb-2 font-14">Bungee Jump</li>
                                <li class="mb-2 font-14">City Tour</li>
                                <li class="mb-2 font-14">Hiking Trip</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-2 col-12">
                            <h4 class="my-3">Get in touch</h4>
                            <h3 class="fontw700">Lets Talk <span class="fa fa-long-arrow-right ps-3"
                                                                 aria-hidden="true"></span></h3>
                        </div>

                        <div class="col-lg-10 offset-lg-2 col-12">
                            <div class="subscribe-text-Bar pt-3">
                                <form class="shadowDiv">
                                    <div class="input-group border-round-00">
                                        <input type="text" class="form-control form-control-lg"
                                               style="border-radius: unset;" placeholder="Email Address"
                                               aria-label="Example text with button addon"
                                               aria-describedby="button-addon1">
                                        <button class="btn btn-green" style="border-radius: unset;" type="button"
                                                id="button-addon1">Send
                                            Now
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 pt-5">
                    <div class="privacy d-flex justify-content-between border-bottom ">
                        <h5>Privacy Policy</h5>
                        <div class="socialLinks">
                            <p class="text-black fontw600"><span>LinkedIn</span> / <span>Facebook</span> /
                                <span>Instagram</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 py-3">
                    <div class="privacy d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h6>2016-2022 <span>&copy;</span> Emprise</h6>
                        </div>
                        <div class=" text-end">
                            <img src="{{asset('img/method.png')}}" class="img-fluid w-50" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{--    jquery--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{--    carusal--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

    <!-- Bootstrap5 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $(".tag-select").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        })
    </script>
    <!-- Bootstrap5 CDN -->

    <!-- Jquery CDN -->
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

    @yield('js')

    <!-- owl carousel -->



</body>

</html>

