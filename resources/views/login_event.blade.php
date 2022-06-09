@extends('layouts.main')


@section('body')
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">

    <section class="event-step" style="background-image: url('{{ asset('img/banner4.jpg') }}'); background-position: center; background-size: cover;">
        <div class="container bg-transparent">
            <div class="card border-0">
                <div class="form">
                    <div class="left-side">
                        <div class="left-heading">
                            <h3>Event Planner</h3>
                        </div>
                        <div class="steps-content">
                            <h3>Step <span class="step-number">1</span></h3>
                            <!-- <p class="step-number-content active">Please provide the following information</p>
                            <p class="step-number-content d-none">Where is your business located</p>
                            <p class="step-number-content d-none">Please provide some of your information</p>
                            <p class="step-number-content d-none">Processing your information to help you onboard</p> -->
                        </div>
                        <ul class="progress-bar-1"
                            style="display: flex;flex-direction: column;justify-content: center;overflow: hidden;color: #fff;text-align: center;white-space: nowrap;transition: width .6s ease;">
                            <li class="active">Welcome Onboard</li>
                            <li>Location</li>
                            <li>Personal Information</li>
                            <li>Processing</li>
                        </ul>



                    </div>
                    <div class="right-side">
                    <form action="{{ url('/addplanner') }}" method="POST" id="first_form">
                        @csrf
                        <div class="main active py-2">
                            <div class="text">
                                <h2>Welcome Onboard</h2>
                                <p>Please provide the following information</p>
                            </div>

                            <div class="input-text">
                                <div class="dropdown">
                                    
                                <span>Business Category</span>
                                    <select name="category" required>
                                            
                                        
                                        @foreach($catgs as $catg)
                                            <option value="{{ $catg->id }}"><a class="dropdown-item"  href="#">{{ $catg->name}}</a></option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required require name="business" value="{{ old('business') }}" id="business">
                                    <span>Business Name</span>
                                </div>
                            </div>

                            
                                
                            <div class="input-text">
                                
                                    <input type="number" class="form-control" placeholder="Phone #" required require name="phone"  id="phone" value="{{ old('phone') }}">
                                    <input type="hidden" id="contrycode" name="contrycode">
                            </div>




                            <div class="buttons py-6">
                                <button class="next_button" id="subbtn">Next Step</button>
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
                                    <input type="text" required require name="address" value="{{ old('address') }}">
                                    <span>Address</span>
                                </div>
                            </div>


                            <div class="buttons button_space">
                                <button class="back_button">Back</button>
                                <button class="next_button">Next Step</button>
                            </div>
                        </div>
                        <div class="main">
                           
                            <div class="text">
                                <h2>Almost There!</h2>
                                <p>Please provide some of your information</p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" class="@error('name') is-invalid @enderror" id="user_name" name="name" id="name" value="{{ old('name') }}">
                                    <span>First Name</span>
                                </div>
                                <div class="input-div">
                                    <input type="text"  name="lastname"  id="lastname" value="{{ old('lastname') }}">
                                    <span>Last Name</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="email"  name="email"  id="email" value="{{ old('email') }}">
                                    <span>E-mail Address</span>
                                </div>
                            </div>
                            
                            <!-- <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required require>
                                    <span>Experience 1</span>
                                </div>
                                <div class="input-div"> 
                                    <input type="text" required require>
                                    <span>Position</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required>
                                    <span>Experience 2</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" required>
                                    <span>Position</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required>
                                    <span>Experience 3</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" required>
                                    <span>Position</span>
                                </div>
                            </div> -->
                            <div class="buttons button_space">
                                <button class="back_button">Back</button>
                                <button class="next_button">Next Step</button>
                            </div>
                        </div>

                    </form>


                        <div class="main">
                            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                            </svg>

                            <div class="text congrats">
                                <h2>Congratulations!</h2>
                                <p>Processing your information to help you onboard</p>
                            </div>


                            <div class="dashBoard d-flex justify-content-end align-items-end mt-5 pt-5">
                                <a href="./admin/index.html"><button class="btn btn-green">Go To Dashboard</button></a>
                            </div>
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
    <!-- <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script> -->
    <!-- Jquery CDN -->
   
 

    <script src="{{ asset('js/event.js') }}"></script>

<script>
    
  @if(Session::has('success'))

  toastr.success("{{ session('success') }}");

  @endif

  @if(Session::has('error'))

  toastr.error("{{ session('error') }}");

  @endif




@if($errors->any())
    
    
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
    
        @endforeach
@endif


</script>


<script>

</script>




<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
    <script>
        var telInput = $("#phone"),
        
  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");
// initialise plugin
telInput.intlTelInput({
  allowExtensions: true,
  formatOnDisplay: true,
  autoFormat: true,
  autoHideDialCode: true,
  autoPlaceholder: true,
  defaultCountry: "auto",
  ipinfoToken: "yolo",
  nationalMode: false,
  numberType: "MOBILE",
  //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
  preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
  preventInvalidNumbers: true,
  separateDialCode: true,
  initialCountry: "auto",
  geoIpLookup: function(callback) {
  $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    var countryCode = (resp && resp.country) ? resp.country : "";
    callback(countryCode);
  });
},
   utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
});
var reset = function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
};
// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
  }
});
// on keyup / change flag: reset
telInput.on("keyup change", reset);
</script>



<script>

$( document ).ready(function() {
       
        $(".selected-flag").bind("DOMSubtreeModified",function(){
            
            $("#contrycode").val($(this).text()+$("#phone").val());
        });

        $("#subbtn").click(function(){
            $("#contrycode").val($('.selected-flag').text()+$("#phone").val());
        });


        

});


</script>

@endsection