@extends('layouts.main')


@section('body')
<style>
    .disableddiv {
    pointer-events: none;
    opacity: 0.4;
    }
    .clos_icon{
        color: red;
        line-height: 2.2;
    }
    .add_btn{
        color: green;
    }
    .modal-content
    {
        background-color: transparent!important;
        border: unset!important;
        border-radius:unset!important;

    }
    .modal-header,.modal-footer{
        border-bottom: unset!important;
        border-top: unset!important;

    }
    .event-step .container {
    min-height: unset!important;
    }
    .btn-close{
        background-color: white!important;
        padding: 3%!important;
    }


</style>
<link rel="stylesheet" href="{{ asset('css/event.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addpackage.css')}}">

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
                <button type="button" class="btn btn-green rounded-pill" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">Add New Restaurant</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal  fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                       
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
                                            <form method="post" action="{{ url('/planner/addrest') }}">
                                                @csrf
                                                <div class="main active">
                                                    <div class="text">
                                                        <h2>Welcome Onboard</h2>
                                                        <p>Please provide the following information</p>
                                                    </div>

                                                    <div class="input-text">
                                                        <div class="dropdown">
                                                            <span>Business Category</span>
                                                            <select name="category" required require >
                                                                @foreach($catgs as $catg)
                                                                <option value="{{ $catg->id }}"><a class="dropdown-item"
                                                                        href="#">{{ $catg->name}}</a></option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="input-text">
                                                        <div class="input-div">
                                                            <input type="text" name="business"  required require>
                                                            <span>Business Name</span>
                                                        </div>
                                                    </div>




                                                    <div class="buttons py-4">
                                                        <button type="button" class="next_button">Next Step</button>
                                                    </div>
                                                </div>



                                                <div class="main">

                                                    <div class="text">
                                                        <h2>Location</h2>
                                                        <p>Where is your busniess located</p>
                                                    </div>
                                                    <div class="map-section">
                                                        <div id="map">
                                                            <iframe
                                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435521.40805866005!2d74.05418685157167!3d31.482635201814045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1652960345553!5m2!1sen!2s"
                                                                width="100%" height="100%"
                                                                style="border:0; border-radius: 24px;"
                                                                allowfullscreen="" loading="lazy"
                                                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                                                    </div>
                                                    <div class="input-text">
                                                        <div class="input-div">
                                                            <input type="text" name="address"  required require>
                                                            <span>Address</span>
                                                        </div>
                                                    </div>


                                                    <div class="buttons button_space">
                                                        <button class="back_button" type="button">Back</button>
                                                        <button class="next_button" type="button">Next Step</button>
                                                    </div>
                                                </div>
                                                <div class="main" style="overflow-y: scroll; height:496px;">

                                                    <div class="text">
                                                        <h2>Openning And Closing Hours</h2>
                                                        <p>Please provide your restaurant opening and closing hours</p>
                                                    </div>
                                                    <div class="hoursmaindiv">
                                                    
                                                        <input type="checkbox" id="_24by7" name="_24by7">
                                                        <label for="_24by7"> Available 24/7 Hours</label>
                                                        <div class="hoursdiv">
                                                            <h4 class="mb-0">Monday</h4>
                                                            <input type="number" name="count[]" class="count1" value="0">
                                                            <input type="checkbox" id="_24_1stday" name="_24_1stday">
                                                            <label for="_24_1stday"> Available 24 Hours </label>
                                                            <br>

                                                            <input type="checkbox" id="holiday1" name="holiday1">
                                                            <label for="holiday1"> Holiday </label>

                                                            <div class="monday">
                                                                <div class="main1 input-text mb-2" >
                                                                    <div class="main2 input-div">

                                                                        <input type="time" id="user_name" name="mondayopen[]" class="starttime"> 
                                                                        <span>Opening</span>
                                                                    </div>

                                                                    <div class="input-div">
                                                                        <input type="time" id="user_name"
                                                                            name="mondayclose[]" class="endtime">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="div mb-2 text-end">
                                                                <button att="1" type="button" class="btn btn-light me-2 add_btn"><i class="fa fa-plus"></i></button>
                                                                
                                                            </div>
                                                            <h4 class="mb-0">Tuesday</h4>
                                                            <input type="number" name="count[]" class="count2" value="0">
                                                            <input type="checkbox" id="_24_2ndday" name="_24_2ndday">
                                                            <label for="_24_2ndday"> Available 24 Hours </label>
                                                            <br>

                                                            <input type="checkbox" id="holiday2" name="holiday2">
                                                            <label for="holiday2"> Holiday </label>
                                                            <div class="tuesday">
                                                                <div class="input-text mb-2">
                                                                    <div class="input-div">
                                                                        <input type="time" id="user_name"
                                                                            name="tuesdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none" id="user_name" class="endtime"
                                                                            name="tuesdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">
                                                                <button att="2"  type="button" class="btn btn-light me-2 add_btn"><i class="fa fa-plus"></i></button>
                                                               
                                                            </div>
                                                            <h4 class="mb-0">Wednesday</h4>
                                                            <input type="number" name="count[]" class="count3" value="0">
                                                            <input type="checkbox" id="_24_3rdday" name="_24_3rdday">
                                                            <label for="_24_3rdday"> Available 24 Hours </label>
                                                            <br>

                                                            <input type="checkbox" id="holiday3" name="holiday3">
                                                            <label for="holiday3"> Holiday </label>
                                                            <div class="wednesday">
                                                                <div class="input-text mb-2">

                                                                    <div class="input-div">
                                                                        <input type="time" id="user_name"
                                                                            name="wednesdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none" id="user_name" class="endtime"
                                                                            name="wednesdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">
                                                            <button att="3"  type="button" class="btn btn-light me-2 add_btn"><i class="fa fa-plus"></i></button>
                                                            
                                                            </div>
                                                            <h4 class="mb-0">Thursday</h4>
                                                            <input type="number" name="count[]" class="count4" value="0">
                                                            <input type="checkbox" id="_24_4thday" name="_24_4thday">
                                                            <label for="_24_4thday"> Available 24 Hours </label>
                                                            <br>

                                                            <input type="checkbox" id="holiday4" name="holiday4">
                                                            <label for="holiday4"> Holiday </label>
                                                            <div class="thursday">
                                                                <div class="input-text mb-2">

                                                                    <div class="input-div">
                                                                        <input type="time" id="user_name"
                                                                            name="thursdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none" id="user_name" class="endtime"
                                                                            name="thursdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">
                                                            <button att="4"  type="button" class="btn btn-light me-2 add_btn"><i class="fa fa-plus"></i></button>
                                                            
                                                            </div>
                                                            <h4 class="mb-0">Friday</h4>
                                                            <input type="number" name="count[]" class="count5" value="0">
                                                            <input type="checkbox" id="_24_5thday" name="_24_5thday">
                                                            <label for="_24_5thday"> Available 24 Hours </label>
                                                            <br>

                                                            <input type="checkbox" id="holiday5" name="holiday5">
                                                            <label for="holiday5"> Holiday </label>

                                                            <div class="friday">
                                                                <div class="input-text mb-2">

                                                                    <div class="input-div">
                                                                        <input type="time" id="user_name" name="fridayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none" id="user_name" class="endtime"
                                                                            name="fridayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">
                                                            <button att="5"  type="button" class="btn btn-light me-2 add_btn"><i class="fa fa-plus"></i></button>
                                                            
                                                            </div>
                                                            <h4 class="mb-0">Saturday</h4>
                                                            <input type="number" name="count[]" class="count6" value="0">
                                                            <input type="checkbox" id="_24_6thday" name="_24_6thday">
                                                            <label for="_24_6thday"> Available 24 Hours </label>
                                                            <br>

                                                            <input type="checkbox" id="holiday6" name="holiday6">
                                                            <label for="holiday6"> Holiday </label>

                                                            <div class="saturday">
                                                                <div class="input-text mb-2">

                                                                    <div class="input-div">
                                                                        <input type="time" id="user_name"
                                                                            name="saturdayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" id="user_name" class="endtime"
                                                                            name="saturdayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">
                                                            <button att="6"  type="button" class="btn btn-light me-2 add_btn"><i class="fa fa-plus"></i></button>
                                                            
                                                            </div>
                                                            <h4 class="mb-0">Sunday</h4>
                                                            <input type="number" name="count[]" class="count7" value="0">
                                                            <input type="checkbox" id="_24_7thday" name="_24_7thday">
                                                            <label for="_24_7thday"> Available 24 Hours </label>
                                                            <br>

                                                            <input type="checkbox" id="holiday7" name="holiday7">
                                                            <label for="holiday7"> Holiday </label>

                                                            <div class="sunday">
                                                                <div class="input-text mb-2">

                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="dss" id="user_name"
                                                                            name="sundayopen[]">
                                                                        <span>Opening</span>
                                                                    </div>
                                                                    <div class="input-div">
                                                                        <input type="time" placeholder="none" id="user_name" class="endtime"
                                                                            name="sundayclose[]">
                                                                        <span>Closing</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="div mb-2 text-end">
                                                                <button att="7"  type="button" class="btn btn-light me-2 add_btn"><i class="fa fa-plus"></i></button>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    

                                                    <div class="buttons button_space">
                                                        <button class="back_button" type="button">Back</button>
                                                        <button class="next_button">Next Step</button>
                                                    </div>
                                                </div>
                                            </form>


                                            <div class="main">
                                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 52 52">
                                                    <circle class="checkmark__circle" cx="26" cy="26" r="25"
                                                        fill="none" />
                                                    <path class="checkmark__check" fill="none"
                                                        d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                                </svg>

                                                <div class="text congrats">
                                                    <h2>Congratulations!</h2>
                                                    <p>Your Business has been in our record. Please give sometime for
                                                        review.</p>
                                                </div>


                                                <div
                                                    class="dashBoard d-flex justify-content-end align-items-end mt-5 pt-5">
                                                    <a href=""><button class="btn btn-green">Add New
                                                            Package</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row py-3">
            <div class="col-lg-3 col-12 col-sm-6 my-2">


                <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                 <button class="btn btn-green rounded-pill"
                                                            data-bs-target="#packageSection" data-bs-toggle="modal"
                                                            data-bs-dismiss="modal">Add New Package</button>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-lg-3 col-12 col-sm-6 my-2">
                <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
                    <img src="{{ asset('img/banner.jpg') }}" alt=""
                        class="img-fluid position-relative border-rounded p-2">
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
 <div class="modal fade" id="packageSection" aria-hidden="true" aria-labelledby="addPackageLabel"
                tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                  
                        <div class="modal-body">
                            <!-- MultiStep Form -->
                            <div class="closeBtn text-end pt-3">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="container-fluid" id="grad1">
                                <div class="row justify-content-center mt-0">
                                    <div
                                        class="main-column col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2 ">
                                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                            <h2><strong>Add Your Package</strong></h2>
                                            <!-- <p>Fill all form field to go to next step</p> -->
                                            <div class="row">
                                                <div class="col-md-12 mx-0">
                                                    <form id="msform">
                                                        <!-- progressbar -->
                                                        <ul id="progressbar">
                                                            <li class="active" id="account"><strong>Welcome</strong>
                                                            </li>
                                                            <li id="personal"><strong>Offer</strong></li>
                                                            <li id="payment"><strong>Upload Menu</strong></li>
                                                            <li id="confirm"><strong>Availability</strong></li>
                                                            <li id="finish"><strong>Finish</strong></li>
                                                        </ul>
                                                        <!-- fieldsets -->
                                                        <fieldset>
                                                            <div class="form-card">
                                                                <h2 class="fs-title">Your Business</h2>
                                                                <select class="list-dt" id="selectBNS" name="expmonth">
                                                                    <option selected>Please Select Business</option>
                                                                    <option>Lorem</option>
                                                                    <option>ABCW</option>
                                                                    <option>XYXN</option>
                                                                    <option>ADUSD</option>
                                                                    <option>SDIFWI</option>
                                                                    <option>FJWWI</option>
                                                                </select>
                                                              
                                                            </div>
                                                            <input type="button" name="next" class="next action-button"
                                                                value="Next Step" />
                                                        </fieldset>
                                                        <fieldset >
                                                            <div class="form-card">
                                                                <h2 class="fs-title">Package Range</h2>

                                                                <input type="text" name="lname"
                                                                    placeholder="Package Name" />
                                                                <div class="mb-4">
                                                                    <label for="allow"
                                                                        class="label-text pb-2 font-17 fontw500">Allowed
                                                                        Member</label>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="quantity border rounded-2 px-2">
                                                                            <a href="#"
                                                                                class="quantity__minus"><span>-</span></a>
                                                                            <input name="quantity" type="text"
                                                                                class="quantity__input mb-0 border-0"
                                                                                value="1">
                                                                            <a href="#"
                                                                                class="quantity__plus"><span>+</span></a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="price-radio">
                                                                    <label for="allow"
                                                                        class="label-text font-17 fontw500">Price</label>
                                                                    <div class="d-flex">

                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio"
                                                                                name="flexRadioDefault"
                                                                                id="flexRadioDefault1">
                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault1">
                                                                                Person
                                                                            </label>
                                                                        </div>
                                                                        <div class="form-check ms-3">

                                                                            <label class="form-check-label"
                                                                                for="flexRadioDefault2">
                                                                                Menu
                                                                            </label>
                                                                            <input class="form-check-input" type="radio"
                                                                                name="flexRadioDefault"
                                                                                id="flexRadioDefault2" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <input type="button" name="previous"
                                                                class="previous action-button-previous"
                                                                value="Previous" />
                                                            <input type="button" name="next" class="next action-button"
                                                                value="Next Step" />
                                                        </fieldset>
                                                        <fieldset class="custom_pre_model">
                                                            <div class="form-card">
                                                                <h2 class="fs-title">Upload Menu</h2>
                                                                <div class="dropi" style="width:364px;">
                                                                    <input name="file1" type="file" class="dropify"
                                                                        data-height="100" />
                                                                </div>
                                                            </div>
                                                            <input type="button" name="previous"
                                                            class=" previous action-button-previous"
                                                            value="Previous" />
                                                        <input type="button" name="next" class="next action-button"
                                                            value="Next Step" />
                                                        </fieldset>
                                                        <fieldset class="custom_pre_model2">
                                                           <div class="availability">
                                                            <div class="text-start ps-2">
                                                                <label for="dateandTime" class="label-text font-17 fontw500">Pick Your Date and Time</label>
                                                                <input id="datetimepicker" type="text" class="w-75" placeholder="Date and Time">
                                                          </div>

                                                          <input type="button" name="previous"
                                                            class="custom_pre"
                                                            value="Previous" />
                                                          <input type="button" name="make_payment" class="next action-button" value="Finish"/>
                                                           </div>

                                                        </fieldset>
                                                        <fieldset>
                                                            
                                                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                                                </svg>
                                    
                                                                <div class="text congrats">
                                                                    <h2>Congratulations!</h2>
                                                                    <p>Processing your information to help you onboard</p>
                                                                </div>
                                                            
                                                        </fieldset>
                                                      
                                                    </form>
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
                            <i class="fa fa-question-circle-o rounded-circle text-purple-1 font-45" aria-hidden="true">
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
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<!-- Bootstrap5 CDN -->

<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<!-- Jquery CDN -->

    <script src="{{ asset('js/addPackage.js')}}"></script>

<!-- owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
    (function($) {
        $.fn.countTo = function(options) {
            options = options || {};

            return $(this).each(function() {
                // set options for current element
                var settings = $.extend({},
                    $.fn.countTo.defaults, {
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

    jQuery(function($) {
        // custom formatting example
        $(".count-number").data("countToOptions", {
            formatter: function(value, options) {
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


<script>
@if(Session::has('success'))

toastr.success("{{ session('success') }}");

@endif

@if(Session::has('error'))

toastr.error("{{ session('error') }}");

@endif




@if($errors->any())

@foreach($errors->all() as $error)
toastr.error("{{ $error }}");

@endforeach
@endif
</script>



<script>
$(document).ready(function() {
    $('.addbtn').click(function() {
        
    });

    $('.removbtn').click(function() {
        $('.hoursdiv1').remove();
        
    });


    
    $('.custom_pre').click(function() {
        $('.custom_pre_model').css({"opacity": "1","position":"relative", "display":" block"});
        $('.custom_pre_model2').css({"opacity": "0","position":"relative", "display":" none"});

        
         $('.payment').addClass('active');
         $('.finish').removeClass('active');
         $('.confirm').removeClass('active');
        
        
        
    });

    



    // 

    $('#_24by7').click(function() {

        if ($(this).is(":checked"))
        {
            $('.hoursdiv').addClass('d-none');
        }
        else{
            $('.hoursdiv').removeClass('d-none');
           
        }
        
        
    });

    $('#_24_1stday').click(function() {

        if ($(this).is(":checked"))
        {
            $('.monday').addClass('disableddiv');
        }
        else{
            $('.monday').removeClass('disableddiv');
        
        }


    });
    $('#_24_2ndday').click(function() {

        if ($(this).is(":checked"))
        {
            $('.tuesday').addClass('disableddiv');
        }
        else{
            $('.tuesday').removeClass('disableddiv');
        
        }


    });
    $('#_24_3rdday').click(function() {

        if ($(this).is(":checked"))
        {
            $('.wednesday').addClass('disableddiv');
        }
        else{
            $('.wednesday').removeClass('disableddiv');
        
        }


    });
    $('#_24_4thday').click(function() {

        if ($(this).is(":checked"))
        {
            $('.thursday').addClass('disableddiv');
        }
        else{
            $('.thursday').removeClass('disableddiv');
        
        }


    });
    $('#_24_5thday').click(function() {

        if ($(this).is(":checked"))
        {
            $('.friday').addClass('disableddiv');
        }
        else{
            $('.friday').removeClass('disableddiv');
        
        }


    });
    $('#_24_6thday').click(function() {

        if ($(this).is(":checked"))
        {
            $('.saturday').addClass('disableddiv');
        }
        else{
            $('.saturday').removeClass('disableddiv');
        
        }


    });
    $('#_24_7thday').click(function() {

        if ($(this).is(":checked"))
        {
            $('.sunday').addClass('disableddiv');
        }
        else{
            $('.sunday').removeClass('disableddiv');

        }


    });

    
    

    $('.add_btn').click(function() {
        if($(this).attr('att') == 1)
        {
            $('.count1').val( function(i, oldval) {
                return ++oldval;
            });
            

            $('.monday').append(`<div class="input-text mb-2 day1">
            <div class="input-div">
                <input type="time" id="user_name" name="mondayopen[]">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="mondayclose[]">
                <span>Closing</span>
            </div>
            <i  class="fa fa-close clos_icon"></i>
            </div>`);
        }
        else if($(this).attr('att') == 2)
        {
            $('.count2').val( function(i, oldval) {
                return ++oldval;
            });
            $('.tuesday').append(`<div class="input-text mb-2 day2">
            <div class="input-div">
                <input type="time" id="user_name" name="tuesdayopen[]">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="tuesdayclose[]">
                <span>Closing</span>
            </div>
            <i  class="fa fa-close clos_icon"></i>
            </div>`);
        }
        else if($(this).attr('att') == 3)
        {
            $('.count3').val( function(i, oldval) {
                return ++oldval;
            });
            $('.wednesday').append(`<div class="input-text mb-2 day3">
            <div class="input-div">
                <input type="time" id="user_name" name="wednesdayopen[]">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="wednesdayclose[]">
                <span>Closing</span>
            </div>
            <i  class="fa fa-close clos_icon"></i>
            </div>`);
        }
        else if($(this).attr('att') == 4)
        {
            $('.count4').val( function(i, oldval) {
                return ++oldval;
            });
            $('.thursday').append(`<div class="input-text mb-2 day4">
            <div class="input-div">
                <input type="time" id="user_name" name="thursdayopen[]">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="thursdayclose[]">
                <span>Closing</span>
            </div>
            <i  class="fa fa-close clos_icon"></i>
            </div>`);
        }
        else if($(this).attr('att') == 5)
        {
            $('.count5').val( function(i, oldval) {
                return ++oldval;
            });
            $('.friday').append(`<div class="input-text mb-2 day5">
            <div class="input-div">
                <input type="time" id="user_name" name="fridayopen[]">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="fridayclose[]">
                <span>Closing</span>
            </div>
            <i  class="fa fa-close clos_icon"></i>
            </div>`);
        }
        else if($(this).attr('att') == 6)
        {
            $('.count6').val( function(i, oldval) {
                return ++oldval;
            });
            $('.saturday').append(`<div class="input-text mb-2 day6">
            <div class="input-div">
                <input type="time" id="user_name" name="saturdayopen[]">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="saturdayclose[]">
                <span>Closing</span>
            </div>
            <i  class="fa fa-close clos_icon"></i>
            </div>`);
        }
        else if($(this).attr('att') == 7)
        {
            $('.count7').val( function(i, oldval) {
                return ++oldval;
            });
            $('.sunday').append(`<div class="input-text mb-2 day7">
            <div class="input-div">
                <input type="time" id="user_name" name="sundayopen[]">
                <span>Opening</span>
            </div>

            <div class="input-div">
                <input type="time" id="user_name"
                    name="sundayclose[]">
                <span>Closing</span>
            </div>
            <i  class="fa fa-close clos_icon"></i>
            </div>`);
        }
        

    });    

    $(document).on("click",".clos_icon",function() {

        
        $(this).parent().remove();
        

    
    });

    // $('.endtime').each(function(i, obj) {
            //test
    $(document).on("blur", ".endtime", function() {
        $end = $(this).val();
        $star = $(this).closest('.main1').children('.main2').children('.starttime').val()
        alert($star);
        if($star > $end)
        {
            alert('star date us less');
            
        }
        else{
            alert('end date is less')
        }
            
        // });
    });

    


    

    
});
</script>
<script>
    
    
</script>




@endsection