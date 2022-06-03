@extends('layouts.main')


@section('body')

    <!-- NavBar section end -->
    <section class="breadCrumbs mt-lg-5 pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ ('/user') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Restaurant</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter div -->
    <section>
        <div class="container">
            <div class="row text-center mt-5">
                <div class="col-md-4 col-6">
                    <div class="counter border-rounded-40">
                        <p class="count-text fontw700">Total Restaurants</p>
                        <h2 class="timer count-title count-number" data-to="50" data-speed="1500"></h2>
                        <p class="count-text fontw500">All</p>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="counter border-rounded-40">
                        <p class="count-text fontw700">Booking</p>
                        <h2 class="timer count-title count-number" data-to="96" data-speed="1500"></h2>
                        <p class="count-text fontw500">Last 30 Days</p>
                    </div>
                </div>
                <div class="col-md-4 col-6 pt-3 pt-md-0">
                    <div class="counter border-rounded-40">
                        <p class="count-text fontw700">Impression</p>
                        <h2 class="timer count-title count-number" data-to="6789" data-speed="1500"></h2>
                        <p class="count-text fontw500">Last 30 Days</p>
                    </div>
                </div>
                <!-- <div class="col-md-3 col-6">
        <div class="counter">
          <i class="fa fa-bug fa-2x"></i>
          <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
          <p class="count-text ">Coffee With Clients</p>
        </div>
      </div> -->
            </div>
        </div>
    </section>
    <!-- Counter div -->

    <!-- restaurant -->

    <section class="restaurant my-5">
        <div class="container">
            <div class="row">
                <div class="col-6 py-4">
                    <h3 class="mb-3 fontw700">Restaurants</h3>
                </div>
                <div class="col-6 text-right d-flex justify-content-end py-4">
                    <button type="button" class="btn btn-green rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add New Restaurant</button>
                </div>
            </div>
    
            <!-- Modal -->
            <div class="modal  fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Add Restaurant</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <section class="event-step">
                                <div class="container bg-transparent">
                                    <div class="card border-0">
                                        <div class="form">
                                            <div class="left-side">
                                                <div class="left-heading">
                                                    <h3>Add Your Restaurants</h3>
                                                </div>
                                                <div class="steps-content">
                                                    <h3>Step <span class="step-number">1</span></h3>
                                                    <!-- <p class="step-number-content active">Please provide the following information</p>
                                                    <p class="step-number-content d-none">Where is your business located</p>
                                                    <p class="step-number-content d-none">Please provide some of your information</p>
                                                    <p class="step-number-content d-none">Processing your information to help you onboard</p> -->
                                                </div>
                                                <ul class="progress-bar-1 p-0 mt-0"
                                                    style="display: flex;flex-direction: column;justify-content: center;overflow: hidden;color: #fff;text-align: center;white-space: nowrap;transition: width .6s ease;">
                                                    <li class="active">Welcome Onboard</li>
                                                    <li>Location</li>
                                                    <li>Opening Hours</li>
                                                    <li>Processing</li>
                                                </ul>
                        
                        
                        
                                            </div>
                                            <div class="right-side">
                                                <div class="main active">
                                                    <div class="text">
                                                        <h2>Welcome Onboard</h2>
                                                        <p>Please provide the following information</p>
                                                    </div>
                        
                                                    <div class="input-text">
                                                        <div class="dropdown">
                                                            <a class="btn border text-grey-three dropdown-toggle" href="#" role="button"
                                                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Business Category
                                                            </a>
                        
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                        
                                                    <div class="input-text">
                                                        <div class="input-div">
                                                            <input type="text">
                                                            <span>Business Name</span>
                                                        </div>
                                                    </div>
                        
                                                  
                        
                        
                                                    <div class="buttons py-4">
                                                        <button class="next_button">Next Step</button>
                                                    </div>
                                                </div>
                        
                        
                        
                                                <div class="main">
                                                   
                                                    <div class="text">
                                                        <h2>Location</h2>
                                                        <p>Where is your busniess located</p>
                                                    </div>
                                                    <div class="map-section">
                                                        <div id="map">
                                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435521.40805866005!2d74.05418685157167!3d31.482635201814045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1652960345553!5m2!1sen!2s" width="100%" height="100%" style="border:0; border-radius: 24px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="input-text">
                                                        <div class="input-div">
                                                            <input type="text">
                                                            <span>Address</span>
                                                        </div>
                                                    </div>
                        
                        
                                                    <div class="buttons button_space">
                                                        <button class="back_button">Back</button>
                                                        <button class="next_button">Next Step</button>
                                                    </div>
                                                </div>
                                                <div class="main" style="overflow-y: scroll; height:100%;">
                                                   
                                                    <div class="text">
                                                        <h2>Openning And Closing Hours</h2>
                                                        <p>Please provide your restaurant opening and closing hours</p>
                                                    </div>
                                                    <h4 class="mb-0">Monday</h4>
                                                    <div class="input-text mb-2">
                                                        <div class="input-div">
                                                            <input type="time" id="user_name">
                                                            <span>Opening</span>
                                                        </div>
                                                       
                                                        <div class="input-div">
                                                            <input type="time" id="user_name">
                                                            <span>Closing</span>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="div mb-2 text-end">
                                                        <button id="add_btn" class="btn btn-light me-2">Add</button>
                                                        <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
                                                    </div>
                                                    <h4 class="mb-0">Tuesday</h4>
                                                    <div class="input-text mb-2">
                                                      
                                                        <div class="input-div">
                                                            <input type="time" id="user_name">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" placeholder="none" id="user_name">
                                                            <span>Closing</span>
                                                        </div>
                                                    </div>
                                                     <div class="div mb-2 text-end">
                                                        <button class="btn btn-light me-2">Add</button>
                                                        <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
                                                    </div>
                                                    <h4 class="mb-0">Wednesday</h4>
                                                    <div class="input-text mb-2">
                                                      
                                                        <div class="input-div">
                                                            <input type="time" id="user_name">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" placeholder="none" id="user_name">
                                                            <span>Closing</span>
                                                        </div>
                                                    </div>
                                                     <div class="div mb-2 text-end">
                                                        <button class="btn btn-light me-2">Add</button>
                                                        <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
                                                    </div>
                                                    <h4 class="mb-0">Thursday</h4>
                                                    <div class="input-text mb-2">
                                                      
                                                        <div class="input-div">
                                                            <input type="time" id="user_name">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" placeholder="none" id="user_name">
                                                            <span>Closing</span>
                                                        </div>
                                                    </div>
                                                     <div class="div mb-2 text-end">
                                                        <button class="btn btn-light me-2">Add</button>
                                                        <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
                                                    </div>
                                                    <h4 class="mb-0">Friday</h4>
                                                    <div class="input-text mb-2">
                                                      
                                                        <div class="input-div">
                                                            <input type="time" id="user_name">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" placeholder="none" id="user_name">
                                                            <span>Closing</span>
                                                        </div>
                                                    </div>
                                                     <div class="div mb-2 text-end">
                                                        <button class="btn btn-light me-2">Add</button>
                                                        <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
                                                    </div>
                                                    <h4 class="mb-0">Saturday</h4>
                                                    <div class="input-text mb-2">
                                                      
                                                        <div class="input-div">
                                                            <input type="time" id="user_name">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" id="user_name">
                                                            <span>Closing</span>
                                                        </div>
                                                    </div>
                                                     <div class="div mb-2 text-end">
                                                        <button class="btn btn-light me-2">Add</button>
                                                        <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
                                                    </div>
                                                    <h4 class="mb-0">Sunday</h4>
                                                    <div class="input-text mb-2">
                                                      
                                                        <div class="input-div">
                                                            <input type="time" placeholder="dss" id="user_name">
                                                            <span>Opening</span>
                                                        </div>
                                                        <div class="input-div">
                                                            <input type="time" placeholder="none" id="user_name">
                                                            <span>Closing</span>
                                                        </div>
                                                    </div>
                                                    <div class="div mb-2 text-end">
                                                        <button class="btn btn-light me-2">Add</button>
                                                        <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
                                                    </div>
                                                    
                                                    <div class="buttons button_space">
                                                        <button class="back_button">Back</button>
                                                        <button class="next_button">Next Step</button>
                                                    </div>
                                                </div>
                        
                        
                                                <div class="main">
                                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                                    </svg>
                        
                                                    <div class="text congrats">
                                                        <h2>Congratulations!</h2>
                                                        <p>Your Business has been in our record. Please give sometime for review.</p>
                                                    </div>
                        
                        
                                                    <div class="dashBoard d-flex justify-content-end align-items-end mt-5 pt-5">
                                                        <a href=""><button class="btn btn-green">Add New Package</button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="./restaurant.html"><button type="button" class="btn btn-green">Go to Dashboard</button></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-3">
                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row py-3">
                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Package -->
    <section class="package my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-6 py-4">
                    <h3 class="mb-3 fontw700">Packages </h3>
                </div>
                <div class="col-6 text-right d-flex justify-content-end py-4">
                    <button class="btn btn-green rounded-pill">Add New Package</button>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-3 col-12 col-sm-6 my-2">
                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row py-3">
                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-12 col-sm-6 my-2">


                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('img/banner.jpg') }}" alt="" class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute" style="left: 80%;">
                            <span class="badge bg-creamy text-danger font-9">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-16">Montain Hiking Tour</h4>
                                <i class="fa fa-heart-o text-grey-three pt-2"></i>
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
                                    <h4 class="font-15">$895.44</h4>
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
                                <p class="mb-3 text-grey-one font-13">Price Varies</p>
                            </div>
                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Add">
                                    <i class="fa fa-plus-circle  text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="View">
                                    <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-inline-block rounded-1 bg-green-two p-2" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="Edit">
                                    <i class="fa fa-pencil-square-o text-white font-24" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

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
                    <div class="bg-green-two text-white border-rounded-1 text-center p-0">
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
                    <div class="bg-purple-1 text-white border-rounded-1 text-center p-0">
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

    <!-- footer section -->
    
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


    <!-- owl carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script>
        $(document).ready(function () {
            (function ($) {
                $.fn.countTo = function (options) {
                    options = options || {};

                    return $(this).each(function () {
                        // set options for current element
                        var settings = $.extend(
                            {},
                            $.fn.countTo.defaults,
                            {
                                from: $(this).data("from"),
                                to: $(this).data("to"),
                                speed: $(this).data("speed"),
                                refreshInterval: $(this).data("refresh-interval"),
                                decimals: $(this).data("decimals")
                            },
                            options
                        );

                        // how many times to update the value, and how much to increment the value on each update
                        var loops = Math.ceil(settings.speed / settings.refreshInterval),
                            increment = (settings.to - settings.from) / loops;

                        // references & variables that will change with each update
                        var self = this,
                            $self = $(this),
                            loopCount = 0,
                            value = settings.from,
                            data = $self.data("countTo") || {};

                        $self.data("countTo", data);

                        // if an existing interval can be found, clear it first
                        if (data.interval) {
                            clearInterval(data.interval);
                        }
                        data.interval = setInterval(updateTimer, settings.refreshInterval);

                        // initialize the element with the starting value
                        render(value);

                        function updateTimer() {
                            value += increment;
                            loopCount++;

                            render(value);

                            if (typeof settings.onUpdate == "function") {
                                settings.onUpdate.call(self, value);
                            }

                            if (loopCount >= loops) {
                                // remove the interval
                                $self.removeData("countTo");
                                clearInterval(data.interval);
                                value = settings.to;

                                if (typeof settings.onComplete == "function") {
                                    settings.onComplete.call(self, value);
                                }
                            }
                        }

                        function render(value) {
                            var formattedValue = settings.formatter.call(self, value, settings);
                            $self.html(formattedValue);
                        }
                    });
                };

                $.fn.countTo.defaults = {
                    from: 0, // the number the element should start at
                    to: 0, // the number the element should end at
                    speed: 1000, // how long it should take to count between the target numbers
                    refreshInterval: 100, // how often the element should be updated
                    decimals: 0, // the number of decimal places to show
                    formatter: formatter, // handler for formatting the value before rendering
                    onUpdate: null, // callback method for every time the element is updated
                    onComplete: null // callback method for when the element finishes updating
                };

                function formatter(value, settings) {
                    return value.toFixed(settings.decimals);
                }
            })(jQuery);

            jQuery(function ($) {
                // custom formatting example
                $(".count-number").data("countToOptions", {
                    formatter: function (value, options) {
                        return value
                            .toFixed(options.decimals)
                            .replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
                    }
                });

                // start all the timers
                $(".timer").each(count);

                function count(options) {
                    var $this = $(this);
                    options = $.extend({}, options || {}, $this.data("countToOptions") || {});
                    $this.countTo(options);
                }
            });

        });
    </script>

<script src="{{ asset('js/event.js') }}"></script>
@endsection