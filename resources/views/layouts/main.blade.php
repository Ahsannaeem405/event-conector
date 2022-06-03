@section("head")
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <!-- Bootstrap 5 link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap 5 link -->
    <!-- jquery css -->
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> -->
    <link rel="stylesheet" href="./css/jqueryui.css">

    <!--  font awesome cdn  -->
    <script src="https://kit.fontawesome.com/9838783293.js" crossorigin="anonymous"></script>
    <!--  font awesome cdn  -->
    <!-- owl  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body class="">
    <section class="navigationBar mb-5 pb-5">
        <nav class="navbar navbar-expand-lg shadowDiv fixed-top bg-white navbar-light py-md-3 text-black px-lg-3">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <a class="navbar-brand fontw700 font-24" href="./index.html">Emprise</a>
                <div class="collapse navbar-collapse ps-md-3" id="navbarTogglerDemo03">
                    <ul class="navbar-nav  me-md-auto mb-2 mb-md-0" id="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link active pt-md-3 fontw500" aria-current="page"
                                href="{{ url('/user') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active pt-md-3 fontw500" href="{{ url('/user/featured_rest') }}">Featured restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active pt-md-3 fontw500" href="{{ url('/user/restaurant') }}">My Restaurants</a>
                        </li>
                        
							<li class="nav-item">
                            <a class="nav-link active pt-md-3 fontw500" href="{{ url('/user/chatBoard') }}">Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active pt-md-3 fontw500" href="{{ url('/user/favourites') }}">favourites</a>
                        </li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle pt-md-3 fontw500 text-black" href="#"
								id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								More
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
								<li><a class="dropdown-item" href="./chatBoard.html">Inbox</a></li>
								<li><a class="dropdown-item" href="./restaurant.html">My Restaurants</a></li>
								<li><a class="dropdown-item" href="./page3.html">Favorite</a></li>
							</ul>
						</li> -->
                        <!--                         
                        <li>
                            <div class="search-box ps-md-4">
                                <input class="search-input mt-2 me-md-2" type="text" name="" placeholder="Search Venue">
                                <div class="search-btn mt-2 mt-md-0 float-lg-right">
                                    <i class="fas fa-search text-white"></i>
                                </div>
                            </div>
                        </li> -->
                    </ul>

                    <div class="hostEvent">
                        <h6 class="pe-3 pt-2 fontw700 font-18"><a href="{{ url('/user/event') }}">Host An Event</a></h6>
                    </div>
                   
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
                        <a href="{{ ('/login') }}"><button class="btn" type="submit">Login</button></a>
                        <a href="{{ ('/register') }}"><button class="btn rounded-pill btn-green" type="button">Sign up</button></a>
                        @endauth                    
            
                    
                </div>
            </div>
        </nav>
    </section>
@show
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
                        <h2 class="fontw700">Adventures Calling <br />You guys!</h2>
                    </div>
                </div>
                <div class="offset-md-2 col-md-4 z1 my-3">
                    <div class="banking d-flex justify-content-center">
                        <div class="bankingCard pe-3 ">
                            <a href="#"><i class="fa fa-credit-card-alt p-3 faa-icon text-seagreen1"
                                    aria-hidden="true"></i></a>
                        </div>
                        <p class="pb-0 mb-0 fontw500">Our Office <br /> <span class="fontw700"> Lahore, Pakistan</span>
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
                                        <button class="btn btn-green py-4" style="border-radius: unset;" type="button"
                                            id="button-addon1">Send
                                            Now</button>
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
                            <img src="./img/method.png" class="img-fluid w-50" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Bootstrap5 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- Bootstrap5 CDN -->

    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <!-- Jquery CDN -->





    <script>

        $(function () {
            $("#datepicker").datepicker({
                dateFormat: 'dd-MM-yy',
                showOtherMonths: true,
                selectOtherMonths: true
            });

        });
    </script>




    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                nav: false,
                dots: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                margin: 20,
                slideSpeed: 3000,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut',
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    960: {
                        items: 3
                    }
                }
            });
            var setMinHeight = function (minheight = 0) {
                jQuery('.owl-carousel').each(function (i, e) {
                    var oldminheight = minheight;
                    jQuery(e).find('.owl-item').each(function (i, e) {
                        minheight = jQuery(e).height() > minheight ? jQuery(e).height() : minheight;
                    });
                    jQuery(e).find('.item').css("min-height", minheight + "px");
                    minheight = oldminheight;
                });
            };
            setMinHeight();

            $(".carousel").swipe({
                swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
                    if (direction == 'left') $(this).carousel('next');
                    if (direction == 'right') $(this).carousel('prev');
                },
                allowPageScroll: "vertical"
            });
        });
        $(document).on('resize', function () {
            setMinHeight();
        });
    </script>


</body>

</html>
@show