@extends('layouts.main')


@section('body')

    <section class="breadCrumbs mt-lg-5 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ ('/user') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Featured restaurants</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 py-4">
                    <div class="d-flex justify-content-between align-items-center border rounded-2 p-2">
                        <div>
                            <p class="text-grey-three font-13 mb-0">Showing 1-10 of 1000 Results for "Restaurants" </p>
                        </div>
                        <div class="d-flex">

                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>Sort By </option>
                                <option value="1">Recent</option>
                                <option value="2">Price Low to High</option>
                                <option value="3">Price High to Low</option>
                                <option value="4">Rating Low to High</option>
                                <option value="5">Rating High to Low</option>
                                <option value="6">Listed Date</option>

                            </select>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-lg-2 col-md-4 col-12 mt-2">
                            <div class="p-2  border rounded-3">
                                <p class="mb-0">
                                    <i class="fa fa-tag font-20 text-blue"></i> &nbsp; <span
                                        class="fontw600 font-14">Discounted Deals</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-12 mt-2">
                            <div class="p-2  border rounded-3">
                                <p class="mb-0">
                                    <i class="fas fa-times-circle font-20 text-blue"></i> &nbsp; <span
                                        class="fontw600 font-14">Free Cancelation</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-12 mt-2">
                            <div class="p-2  border rounded-3">
                                <p class="mb-0">
                                    <i class="fa fa-glass-cheers font-20 text-blue"></i> &nbsp; <span
                                        class="fontw600 font-14">Entrada Special</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-12 mt-2">
                            <div class="p-2  border rounded-3">
                                <p class="mb-0">
                                    <i class="fa fa-stopwatch font-20 text-blue"></i> &nbsp; <span
                                        class="fontw600 font-14">Few Seats Left</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-12 mt-2">
                            <div class="p-2  border rounded-3">
                                <p class="mb-0">
                                    <i class="fa fa-helicopter font-20 text-blue"></i> &nbsp; <span
                                        class="fontw600 font-14">Private Tours</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-12 mt-2">
                            <div class="p-2  border rounded-3">
                                <p class="mb-0">
                                    <i class="fa fa-tag font-20 text-blue"></i> &nbsp; <span
                                        class="fontw600 font-14">New on Entrada</span>
                                </p>
                            </div>
                        </div>




                    </div>
                </div>

                <div class="col-md-3 col-12 px-2 pt-4">
                    <div class="border rounded-2 p-2">
                        <div class="Keywords">
                            <h6 class="mt-3 font-15">Keywords</h6>
                            <div class="inputKeywords mb-3">

                                <input type="text" class="form-control"
                                    aria-describedby="basic-addon2">
                            </div>
                        </div>

                        <div class="Add-category">
                            <div class="categroyText">
                                <h6 class="mt-3 font-15">Add Category</h6>
                            </div>
                            <div class="input-group mb-3 py-3">
                                <select class="form-select" id="inputGroupSelect03"
                                    aria-label="Example select with button addon">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="popularTags">
                            <h6 class=" font-15">Popular Tags</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label font-13 font-13" for="flexCheckChecked">
                                Child Friendly
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label font-13 font-13" for="flexCheckChecked">
                                Taking Extra Precautions
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label font-13 font-13" for="flexCheckChecked">
                                Virtual Experiences
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label font-13 font-13" for="flexCheckChecked">
                                Epic Challenges
                            </label>
                        </div>
                        </div>
                        <div class="eventDate">
                            <h6 class="mt-3 font-15">Event Date</h6>
                            <div class="input-group mb-3">

                                <input type="text" class="form-control border-right-0" id="datepicker2"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text bg-transparent border-left-0" id="basic-addon2"><i
                                        class="fa fa-calendar text-grey-three"></i></span>
                            </div>
                        </div>
                    
                        
                        <!-- multirange -->

                        <!-- multirange -->
                        <h6 class="mt-3 font-15">Reservation Time</h6>
                        <div class="d-flex align-items-center">
                            <label class="form-check-label font-13 font-13" for="flexCheckChecked">
                                From
                            </label>
                            <input type="time" class="form-control mt-2 ms-1">
                        </div>
                        <div class="d-flex align-items-center">
                            <label class="form-check-label font-13 font-13 ps-1" for="flexCheckChecked">
                                To
                            </label>
                            <input type="time" class="form-control mt-2 ms-3">
                        </div>

                        <h6 class="mt-3 font-15">No. of Persons</h6>
                        <!-- <input type="number" min="0" max="500" class="form-control mt-2"> -->
                        <div class="d-flex justify-content-between border rounded-2 px-2">
                            <div>
                                <p class="pt-2 text-grey-three font-13">Persons</p>
                            </div>
                            <div class="quantity">
                                <a href="#" class="quantity__minus"><span>-</span></a>
                                <input name="quantity" type="text" class="quantity__input" value="1">
                                <a href="#" class="quantity__plus"><span>+</span></a>
                            </div>
                        </div>
                        <h6 class="mt-3 font-15">Price Range</h6>
                        <p>

                            <input type="text" class="text-blue form-control bg-transparent" id="amount" readonly
                                style="border:0;  font-weight:bold;">
                        </p>

                        <div id="slider-range" class="mx-2"></div>






                        <h6 class="mt-3 font-15">Event Rating</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label font-13 font-13" for="flexCheckChecked">
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12"></span>
                                <span class="fa fa-star font-12"></span>
                                <span class="fa fa-star font-12"></span>
                                <span class="fa fa-star font-12"></span>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label font-13 font-13" for="flexCheckChecked">
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12"></span>
                                <span class="fa fa-star font-12"></span>
                                <span class="fa fa-star font-12"></span>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label font-13 font-13" for="flexCheckChecked">
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12"></span>
                                <span class="fa fa-star font-12"></span> </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label font-13 font-13" for="flexCheckChecked">
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12"></span> </label>
                        </div>


                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label font-13 font-13" for="flexCheckChecked">
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12 checked"></span>
                                <span class="fa fa-star font-12 checked"></span> </label>
                        </div>

                        <h6 class="mt-3 font-15">Special</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label font-13" for="flexCheckChecked">
                                Discounted Deals
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label font-13" for="flexCheckChecked">
                                Free Cancellations
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label font-13" for="flexCheckChecked">
                                Private Group </label>
                        </div>



                    </div>

                </div>
                <div class="col-md-9 col-12 pt-4">
                    <div class="row px-3">
                        <div class="col-md-6 col-12 mb-3">
                            <div class="card p-3 shadowDiv border-rounded-1  pb-3">
                                <div class="image_div py-3 px-3 position-relative"
                                    style="background-image:url('./img/hall.webp');">
                                    <span class="badge bg-danger float-end">30%</span>


                                </div>
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title font-23">Montain Hiking Tour</h4>

                                        <i class="far fa-heart text-grey-three pt-2"></i>
                                    </div>
                                    <div class="div">
                                        <p class="card-text text-grey-three font-12">Hiking tour | Stoke on Trent</p>
                                    </div>
                                    <div>
                                        <p class="font-9 mb-0 my-3">From</p>
                                    </div>
                                    <div class="pricing-review d-flex justify-content-between">
                                        <div class="pricing">
                                            <h4>$895.44</h4>
                                        </div>
                                        <div class="font-10">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <div class="varies">
                                                <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="variesDiv px-3">
                                    <div class="pricing-varies">
                                        <p class="mb-3 text-grey-one">Price Varies</p>
                                    </div>
                                </div>
                                <div class="proceding px-3 d-flex">
                                    <a>
                                        <i class="far fa-clock font-14 text-green"></i>
                                    </a>
                                    <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                </div>
                                <div class="proceding px-3 d-flex">
                                    <div class="div d-flex pe-3">
                                        <a href="#" class=""><i class="fas fa-check text-green font-14"></i></a>
                                        <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation</p>
                                    </div>
                                    <div class="div d-flex">
                                        <a><i class="fas fa-check text-green font-14"></i></a>
                                        <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <div class="card shadowDiv border-rounded-1 p-3  pb-3">
                                <div class="image_div py-3 px-3 position-relative"
                                    style="background-image:url('./img/hall.webp');">
                                    <span class="badge bg-danger float-end">30%</span>


                                </div>
                                <div class="card-body pb-0">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title font-23">Montain Hiking Tour</h4>

                                        <i class="far fa-heart text-grey-three pt-2"></i>
                                    </div>
                                    <div class="div">
                                        <p class="card-text text-grey-three font-12">Hiking tour | Stoke on Trent</p>
                                    </div>
                                    <div>
                                        <p class="font-9 mb-0 my-3">From</p>
                                    </div>
                                    <div class="pricing-review d-flex justify-content-between">
                                        <div class="pricing">
                                            <h4>$895.44</h4>
                                        </div>
                                        <div class="font-10">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <div class="varies">
                                                <p class="mb-0 pt-2 text-end text-grey-one">4.7(108)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="variesDiv px-3">
                                    <div class="pricing-varies">
                                        <p class="mb-3 text-grey-one">Price Varies</p>
                                    </div>
                                </div>
                                <div class="proceding px-3 d-flex">
                                    <a>
                                        <i class="far fa-clock font-14 text-green"></i>
                                    </a>
                                    <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                </div>
                                <div class="proceding px-3 d-flex">
                                    <div class="div d-flex pe-3">
                                        <a href="#" class=""><i class="fas fa-check text-green font-14"></i></a>
                                        <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation</p>
                                    </div>
                                    <div class="div d-flex">
                                        <a><i class="fas fa-check text-green font-14"></i></a>
                                        <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>



            <!-- similar product -->
            <div class="row mt-4">
                <div class="col-12">
                    <h3 class="text-blue">Similar Restaurants</h3>
                </div>
            </div>


            <div class="owl-carousel">
                <div class="item">
                    <div class="image_div py-3 px-3 position-relative" style="background-image:url('./img/hall.webp');">
                        <div class="row">
                            <div class="col-12">
                                <span class="badge bg-green float-end">30%</span>

                            </div>
                        </div>


                        <div class="d-flex justify-content-between align-items-end mt-30">
                            <div>
                                <h6 class="text-light fontw400">10 Days | 9 Nights</h6>
                                <h3 class="text-light"> $200</h3>
                            </div>
                            <div class="d-flex ms-4">

                                <button class="btn btn-green px-3 py-1 h-50 border-rounded-50">Explore</button>
                            </div>

                        </div>





                    </div>
                    <div class="text-center py-3">
                        <h5 class="text-blue font-16 fontw400">Product 1</h5>
                        <p class="text-grey-three font-14">Checkout daily Deal</p>
                    </div>
                </div>
                <div class="item">
                    <div class="image_div py-3 px-3 position-relative" style="background-image:url('./img/hall.webp');">

                    </div>
                    <div class="text-center py-3">
                        <h5 class="text-blue font-16 fontw400">Product 2</h5>
                        <p class="text-grey-three font-14">Checkout daily Deal</p>
                    </div>

                </div>

            </div>


        </div>
        </div>

    </section>

    <!-- footer section -->
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function () {
            $("#datepicker2").datepicker({
                dateFormat: 'dd-MM-yy',
                showOtherMonths: true,
                selectOtherMonths: true
            });
        });
    </script>
    <script>
        $(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500,
                values: [75, 300],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));
        });
    </script>
    <script>
        $(document).ready(function () {
            const minus = $('.quantity__minus');
            const plus = $('.quantity__plus');
            const input = $('.quantity__input');
            minus.click(function (e) {
                e.preventDefault();
                var value = input.val();
                if (value > 1) {
                    value--;
                }
                input.val(value);
            });

            plus.click(function (e) {
                e.preventDefault();
                var value = input.val();
                value++;
                input.val(value);
            })
        });
    </script>
    <!-- Jquery CDN -->
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
                        items: 2
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
        });

        $(document).on('resize', function () {
            setMinHeight();
        });
    </script>

@endsection



