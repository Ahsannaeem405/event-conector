@extends('layouts.main')

@section('body')


<style type="text/css">
.form-control,
.form-select {
    border: 1px solid #fff;
    padding-left: 0%;
}

.input-group-text {
    border: 1px solid #fff !important;
}

.form-control:focus {
    border-color: #fff !important;
    box-shadow: unset !important;

}

.form-select:focus {
    border-color: #fff !important;
    box-shadow: unset !important;

}

.time-fotm:focus {
    border-color: #fff !important;
    box-shadow: unset !important;

}

.form-control::placeholder {
    color: #a5aeb7;
    border-bottom: 1px solid #a5aeb7;
}

.form-select {
    color: #a5aeb7;
    border-bottom: 1px solid #a5aeb7;
    padding-top: 0px;
}

.time-fotm {
    color: #a5aeb7 !important;
    ;
    border-bottom: 1px solid #a5aeb7 !important;
    padding-top: 0px !important;
}
</style>


<section class="Banner mx-3 mx-md-0 mt-5">
    <div class="container position-relative main mt-md-5 mt-3" style="background-image: url('{{ asset('img/banner4.jpg')}}');">
        <div class="position-absolute overlay w-100 h-100">

        </div>
        <div class="row px-md-5 mx-md-2 mb-5 pb-5">
            <div class="col-md-12 z1">
                <div class="bannerText">
                    <p class="text-white fontw500 pt-5 m-0"><span><i class="fa fa-minus fa-lg"
                                aria-hidden="true"></i></span> The Himaliyan Mountain Ranges</p>
                </div>
            </div>
            <div class="col-md-12 col-sm-6 z1">
                <div class="banner-heading">
                    <h1 class="fontw700 font-70 text-white m-0 py-3">Event Management</h1>
                </div>
            </div>
            <div class="col-md-6 z1">
                <div class="temp">
                    <p class="text-white">-02<sup class="font-15 p-0">&deg;</sup>C very Cold</p>
                </div>
            </div>
            <!-- <div class="offset-lg-2 col-lg-4 z1">
                        <div class="banking d-flex">
                            <div class="bankingCard pe-3">
                                <a href="#"><i class="fa fa-credit-card-alt p-3 faa-icon" aria-hidden="true"></i></a>
                            </div>
                            <p class="text-white pb-0 mb-0">We Accept Payment Through All Cards & Banking</p>
                        </div>
                        <div class=" pt-0 ps-5 ms-3">
                            <a href="#" class="z1 text-white fontw500">Book Now!</a>
                        </div>
                    </div> -->
        </div>

        <div class="row z1 selectDestination d-flex justify-content-center position-relative">
            <div class="col-md-12 selectionLocation bg-white position-absolute px-4">
                <div class="search location">
                    <div class="row py-4">
                        <div class="col-lg-3 location">
                            <div class="location-heading">
                                <h3 class="font-20 fontw700 mb-0">Location:</h3>
                            </div>
                            <div class="input-group mb-3 mt-2">
                                <input type="text" placeholder="Enter Location"
                                    class="form-control border-right-0 hasDatepicker" aria-describedby="basic-addon2">
                                <span class="input-group-text btn bg-transparent border" id="basic-addon2"><i
                                        class="fa fa-map-marker"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4 activities">
                                    <div class="location-heading">
                                        <h3 class="font-20 fontw700 mb-0">Category:</h3>
                                    </div>
                                    <div class="input-group mb-3 mt-2">
                                        <select class="form-select" id="inputGroupSelect03"
                                            aria-label="Example select with button addon">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 Datepicking">
                                    <div class="location-heading">
                                        <h3 class="font-20 fontw700 mb-0">Date:</h3>
                                    </div>

                                    <!-- <div class="input-group mb-3 py-3">
                                            <input type="text" placeholder="Enter Date" class="form-control border-right-0 hasDatepicker" id="datepicker" aria-describedby="basic-addon2">
                                            <span class="input-group-text bg-transparent border-left-0" id="basic-addon2"><i
                                         class="fa fa-calendar text-grey-three"></i></span>
                                        </div> -->

                                    <div class="input-group mb-3 mt-2">
                                        <input type="text" placeholder="dd-mm-yyyy" class="form-control border-right-0"
                                            id="datepicker" aria-describedby="basic-addon2" autocomplete="off">
                                        <span class="input-group-text btn bg-transparent border" id="basic-addon2"><i
                                                class="fa fa-calendar"></i></span>
                                    </div>

                                </div>


                                <!-- <div class="col-md-3 searchbtn d-flex justify-content-center align-items-center">
                                         <form class="location-input" action="">
                                            <button class="btn btn-green p-3" type="button"><i class="fa fa-search font-30"
                                                    aria-hidden="true"></i></button>
                                        </form> 
                                    </div> -->

                                <div class="col-lg-4">
                                    <div class="time-heading">
                                        <h3 class="font-20 fontw700 mb-0">Time:</h3>
                                    </div>
                                    <div class="time mb-3">
                                        <input type="time" class="pe-0 py-0 form-control time-fotm">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-1 searchbtn d-flex justify-content-center align-items-center">
                            <form class="location-input" action="">
                                <a href="./detailFeature.html"><button class="btn btn-green px-3 py-2" type="button"><i
                                            class="fa fa-search font-30" aria-hidden="true"></i></button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</section>

<section class="categories pt-5 my-5">
        <div class="container">
            <div class="row ">
                <div class="col-6">
                    <h3 class="mb-3 fontw700">Select Category</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-6 text-right d-flex justify-content-end">
                    <div class="caraousel-button pe-1">
                        <button class="btn btn-green mb-3 me-1 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="caraousel-button">
                        <button class="btn btn-green mb-3 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                            <span class="carousel-control-next-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide">

                        <div class="carousel-inner">
                            @foreach($catgs as $catg)
                                    <div class="carousel-item p-4 {{$loop->first ? "active": ""}}">
                                        <div class="row">
                                            @foreach($catg as $item)
                                                <div class="col-md-3 mb-3">
                                                    <div class="card shadowDiv rounded-3">
                                                        <div class="reviewTag text-end pe-3 py-3">
                                                            <span class="badge bg-creamy text-creamy">4.9</span>
                                                        </div>
                                                        <div class="" style="height:20px; width:20px;">
                                                        <img src="{{ asset('upload/categoryimages') }}/{{$item->logo}}">
                                                        </div>
                                                        <div class="card-body">
                                                            <h4 class="card-title font-23">{{$item->name}}</h4>
                                                            <p class="card-text text-grey-three font-12">196 Activity</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                        </div>
                                        
                                    </div>                                
                                
                            
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending -->
    <section class="trending my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3 fontw700">Trending 2022</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-6 text-right d-flex justify-content-end">
                    <div class="caraousel-button pe-1">
                        <button class="btn btn-green mb-3 me-1 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators21" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="caraousel-button">
                        <button class="btn btn-green mb-3 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators21" data-bs-slide="next">
                            <span class="carousel-control-next-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators21" class="carousel slide">

                        <div class="carousel-inner">
                            <div class="carousel-item p-4 active">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
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
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner1.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
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
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner3.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
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
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
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
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner2.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
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
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner1.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
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
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner3.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
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
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
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
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                            <img src="./img/banner.jpg" alt=""
                                                class="img-fluid position-relative border-rounded p-2">
                                            <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                style="left: 80%;">
                                                <span class="badge bg-creamy text-danger">4.9</span>
                                            </div>
                                            <div class="card-body pb-0">
                                                <div class="d-flex justify-content-between">
                                                    <h4 class="card-title font-23">Montain Hiking Tour</h4>
                                                    <i class="fa fa-heart text-grey-three pt-2"></i>
                                                </div>
                                                <div class="div">
                                                    <p class="card-text text-grey-three font-12">Hiking tour | Stoke on
                                                        Trent</p>
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
                                                <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                <p class="text-grey-one mb-0 font-15 mb-0 pt-1 ps-1">7 Days</p>
                                            </div>
                                            <div class="proceding px-3 d-flex">
                                                <div class="div d-flex pe-3">
                                                    <a href="#" class=""><i
                                                            class="fa fa-star text-center checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free Cancellation
                                                    </p>
                                                </div>

                                                <div class="div d-flex">
                                                    <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                    <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on Entrada</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trending -->

    <!-- TopVenue -->
    <section class="topVenue my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3 fontw700">Top Venues</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-6 text-right d-flex justify-content-end">
                    <div class="caraousel-button pe-1">
                        <button class="btn btn-green mb-3 me-1 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="caraousel-button">
                        <button class="btn btn-green mb-3 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                            <span class="carousel-control-next-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators3" class="carousel slide">

                        <div class="carousel-inner">
                            <div class="carousel-item p-4 active">
                                <div class="row">
                                    <div class="col-lg-4 mb-4 mb-lg-0">


                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                            class="w-100 border-rounded-40 mb-4 position-relative"
                                            style="height: 46% !important;" alt="Boat on Calm Water" />




                                        <img src="./img/banner2.jpg" class="w-100 h-50 border-rounded-40 mb-4"
                                            alt="Wintry Mountain Landscape" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                            class="w-100 h-100 border-rounded-40 mb-4" alt="Mountains in the Clouds" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="./img/banner3.jpg" class="w-100 border-rounded-40 mb-4"
                                            style="height: 46%;" alt="Waves at Sea" />

                                        <div class="row h-50">
                                            <div class="col-5">
                                                <img src="./img/banner1.jpg" class="h-100 w-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                            <div class="col-7">
                                                <img src="./img/banner.jpg" class="w-100 h-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                            class="w-100 h-50 border-rounded-40 mb-4" style="height: 46% !important;"
                                            alt="Boat on Calm Water" />

                                        <img src="./img/banner2.jpg" class="w-100 h-50 border-rounded-40 mb-4"
                                            alt="Wintry Mountain Landscape" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                            class="w-100 h-100 border-rounded-40 mb-4" alt="Mountains in the Clouds" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="./img/banner3.jpg" class="w-100 border-rounded-40 mb-4"
                                            style="height: 46%;" alt="Waves at Sea" />

                                        <div class="row h-50">
                                            <div class="col-5">
                                                <img src="./img/banner1.jpg" class="h-100 w-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                            <div class="col-7">
                                                <img src="./img/banner.jpg" class="w-100 h-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">
                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                                            class="w-100 h-50 border-rounded-40 mb-4" style="height: 46% !important;"
                                            alt="Boat on Calm Water" />

                                        <img src="./img/banner2.jpg" class="w-100 h-50 border-rounded-40 mb-4"
                                            alt="Wintry Mountain Landscape" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                                            class="w-100 h-100 border-rounded-40 mb-4" alt="Mountains in the Clouds" />
                                    </div>

                                    <div class="col-lg-4 mb-4 mb-lg-0">
                                        <img src="./img/banner3.jpg" class="w-100 border-rounded-40 mb-4"
                                            style="height: 46%;" alt="Waves at Sea" />

                                        <div class="row h-50">
                                            <div class="col-5">
                                                <img src="./img/banner1.jpg" class="h-100 w-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                            <div class="col-7">
                                                <img src="./img/banner.jpg" class="w-100 h-100 border-rounded-40 mb-4"
                                                    alt="Yosemite National Park" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TopVenue -->

    <!-- Menu Guides -->
    <section class="menuGuides my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3 fontw700">Menu Guides</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-6 text-right d-flex justify-content-end">
                    <div class="caraousel-button pe-1">
                        <button class="btn btn-green mb-3 me-1 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="caraousel-button">
                        <button class="btn btn-green mb-3 rounded-circle py-2"
                            data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                            <span class="carousel-control-next-icon d-flex justify-content-center"
                                style="width: 1.5rem;" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators4" class="carousel slide">

                        <div class="carousel-inner">
                            <div class="carousel-item p-4 active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <img src="./img/banner2.jpg" style="height: 400px !important;" alt=""
                                                class="img-fluid border-rounded-40">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="div mt-2">
                                                    <h4 class="text-seagreen1">Adventure Guru</h4>
                                                </div>

                                                <div class="mb-5 pb-5">
                                                    <h3>
                                                        Martina James Junior
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>About</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>Journey</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <div class="socialLinks">
                                                    <p class="text-black fontw600"><span>LinkedIn</span> /
                                                        <span>Facebook</span> /
                                                        <span>Instagram</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <img src="./img/banner2.jpg" style="height: 400px !important;" alt=""
                                                class="img-fluid border-rounded-40">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="div">
                                                    <h4 class="text-seagreen1">Adventure Guru</h4>
                                                </div>

                                                <div class="mb-5 pb-5">
                                                    <h3>
                                                        Martina James Junior
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>About</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>Journey</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <div class="socialLinks">
                                                    <p class="text-black fontw600"><span>LinkedIn</span> /
                                                        <span>Facebook</span> /
                                                        <span>Instagram</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item p-4">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div>
                                            <img src="./img/banner2.jpg" style="height: 400px !important;" alt=""
                                                class="img-fluid border-rounded-40">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="div">
                                                    <h4 class="text-seagreen1">Adventure Guru</h4>
                                                </div>

                                                <div class="mb-5 pb-5">
                                                    <h3>
                                                        Martina James Junior
                                                    </h3>
                                                </div>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>About</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>

                                            <div class="col-6 mt-5">
                                                <h6>Journey</h6>
                                                <p class="font-13 text-grey-one">Lorem ipsum dolor sit amet consectetur,
                                                    adipisicing elit. Maiores itaque laudantium voluptatibus?
                                                </p>
                                            </div>
                                            <div class="col-12">
                                                <div class="socialLinks">
                                                    <p class="text-black fontw600"><span>LinkedIn</span> /
                                                        <span>Facebook</span> /
                                                        <span>Instagram</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Menu Guide -->

    <!-- Best seller -->
    <section class="bestseller my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between">
                    <div>
                        <h4 class="text-blue">Best Seller</h4>
                        <p class="font-400 text-grey-three">Sost Brillient reason Entrada should be your one-stop-shop!
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-green border-rounded-50">Check All</button>
                    </div>
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <div class="image_div py-3 px-3 position-relative" style="background-image:url('./img/hall.webp');">
                        <div class="row">
                            <div class="col-12">
                                <span class="badge bg-green float-end">30%</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-30">
                            <div>
                                <h6 class="text-light">10 Days | 9 Nights</h6>
                                <h3 class="text-light">$200</h3>
                            </div>
                            <div class="d-flex ms-4">
                                <button class="btn btn-green px-3 py-1 h-50 border-rounded-50">Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-3">
                        <h5 class="text-blue">Product 1</h5>
                        <p class="text-grey-three">Checkout daily Deal</p>
                    </div>
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <div class="image_div py-3 px-3 position-relative" style="background-image:url('./img/hall.webp');">
                        <div class="row">
                            <div class="col-12">
                                <span class="badge bg-green float-end">30%</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-30">
                            <div>
                                <h6 class="text-light">10 Days | 9 Nights</h6>
                                <h3 class="text-light">$200</h3>
                            </div>
                            <div class="d-flex ms-4">
                                <button class="btn btn-green px-3 py-1 h-50 border-rounded-50">Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-3">
                        <h5 class="text-blue">Product 1</h5>
                        <p class="text-grey-three">Checkout daily Deal</p>
                    </div>
                </div>
                <div class="col-md-4 col-12 mt-2">
                    <div class="image_div py-3 px-3 position-relative" style="background-image:url('./img/hall.webp');">
                        <div class="row">
                            <div class="col-12">
                                <span class="badge bg-green float-end">30%</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-30">
                            <div>
                                <h6 class="text-light">10 Days | 9 Nights</h6>
                                <h3 class="text-light">$200</h3>
                            </div>
                            <div class="d-flex ms-4">
                                <button class="btn btn-green px-3 py-1 h-50 border-rounded-50">Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-3">
                        <h5 class="text-blue">Product 1</h5>
                        <p class="text-grey-three">Checkout daily Deal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- best seller -->

    <!-- second banner -->
    <section class="secondbanner my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-md-5 py-3">
                    <div class="bg-green-grad text-white border-rounded-1 text-center p-0">

                        <div class="secondHeading pt-5">
                            <h6 class="text-center text-white font-45">Tour the World from Your Cough with
                                #ExperienceLive!</h6>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <p class="text-white-50 font-23">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                        </div>
                        <div class="sale py-4">
                            <form class="d-flex justify-content-center">
                                <button class="btn btn-white-green rounded-pill py-3 px-5" type="button">Sign
                                    up</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- second banner -->
    <!-- Subscribe section -->
    <section class="subscribe my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp"
                        class="w-100 h-100 rounded mb-4" alt="Mountains in the Clouds" />
                </div>
                <div class="col-md-3 mb-4 mb-lg-0">


                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp"
                        class="w-100 rounded mb-4 position-relative" style="height: 45% !important;"
                        alt="Boat on Calm Water" />



                    <img src="./img/banner2.jpg" class="w-100 h-50 rounded mb-4" alt="Wintry Mountain Landscape" />
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="div mt-2">
                                <h4 class="text-seagreen1">Subscribe For offers</h4>
                            </div>

                            <div class="mb-4">
                                <h3 class="fontw700" style="font-size: 35px;">
                                    Adventures Calling </br> You guys!
                                </h3>
                            </div>
                        </div>

                        <div class="col-12">
                            <p class="text-grey-one" style="max-width: 70%;">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Odio nam dignissimos quo?</p>
                        </div>

                        <div class="col-lg-10 col-12">
                            <div class="subscribe-text-Bar pt-5">
                                <form class="shadowDiv">
                                    <div class="input-group border-round-00">
                                        <input type="text" class="form-control form-control-lg"
                                            style="border-radius: unset;" placeholder="Email Address"
                                            aria-label="Example text with button addon"
                                            aria-describedby="button-addon1">
                                        <button class="btn btn-green py-3" style="border-radius: unset;" type="button"
                                            id="button-addon1">Send
                                            Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="socialLinks py-4">
                                <p class="text-grey-one font-13">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe section -->


    <!-- Still have a question -->
    <section class="faqs my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mb-3 fontw700 text-center">Still have a question?</h3>
                    <p class="text-center text-grey-three">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-md-5 py-md-5 py-3">
                    <div class="helpSection bg-green-two text-white border-rounded-1 text-center p-0">
                        <div class=" py-5">
                            <div class="d-inline-block rounded-circle bg-white p-2">
                                <i class="fa fa-headphones bg-white rounded-circle text-seagreen1 font-45"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="heading">
                            <h4>For Sales</h4>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <p class="text-white-50" style="max-width: 55%;">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit.
                            </p>
                        </div>
                        <div class="sale py-4">
                            <p class="mb-0">sales@xyz.com</p>
                            <p class="">+977(985)344-33-42</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 py-md-5 py-3">
                    <div class="supportSection bg-purple-1 text-white border-rounded-1 text-center p-0">
                        <div class=" py-5">
                            <div class="d-inline-block rounded-circle bg-white p-2">
                                <i class="fa fa-question-circle-o rounded-circle text-purple-1 font-45"
                                    aria-hidden="true">
                                </i>
                            </div>
                        </div>
                        <div class="heading">
                            <h4>Help & Support</h4>
                        </div>
                        <div class="d-flex justify-content-center pt-3">
                            <p class="text-white-50" style="max-width: 55%;">Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit.
                            </p>
                        </div>
                        <div class="help py-4">
                            <p class="mb-0">help@xyz.com</p>
                            <p class="">+977(985)344-33-42</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-1"></div>
            </div>
        </div>
    </section>
    <!-- Still have a question -->


<!-- Trending -->


<!-- Trending -->

<!-- TopVenue -->

<!-- TopVenue -->

<!-- Menu Guides -->

<!-- Menu Guide -->

<!-- Best seller -->

<!-- Still have a question -->
@endsection