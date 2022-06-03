@extends('layouts.main')


@section('body')
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
                                    <input type="text" required require>
                                    <span>Business Name</span>
                                </div>
                            </div>

                            <div class="input-text">
                                <div class="input-div">
                                    <select>

                                        <option data-countryCode="US" value="1">Pakistan (+92)</option>
                                        <option>Algeria (+213)</option>
                                        <option>Andorra (+376)</option>
                                        <option>Angola (+244)</option>
                                        <option>Anguilla (+1264)</option>
                                        <option>Antigua &amp; Barbuda (+1268)</option>
                                        <option>Argentina (+54)</option>
                                        <option>Armenia (+374)</option>
                                        <option>Aruba (+297)</option>
                                        <option>Australia (+61)</option>
                                        <option>Austria (+43)</option>
                                        <option>Azerbaijan (+994)</option>
                                        <option>Bahamas (+1242)</option>
                                        <option>Bahrain (+973)</option>
                                        <option>Bangladesh (+880)</option>
                                        <option>Barbados (+1246)</option>
                                        <option>Belarus (+375)</option>
                                        <option>UK (+44)</option>
                                        <option>USA (+1)</option>

                                    </select>
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
                                    <input type="text" required require>
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
                                    <input type="text" required require id="user_name">
                                    <span>First Name</span>
                                </div>
                                <div class="input-div">
                                    <input type="text" required>
                                    <span>Last Name</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" required require>
                                    <span>E-mail Address</span>
                                </div>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="password" required require>
                                    <span>Password</span>
                                </div>
                                <div class="input-div">
                                    <input type="password" required require>
                                    <span>Confirm password</span>
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

@endsection