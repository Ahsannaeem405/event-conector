@extends('layouts.main')

@section('body')
    <div class="container">
        <div class="row text-center my-4">
            <h3>MY BOOKINGS</h3>
        </div>

        <div class="row m-0">
            @foreach($bookings as $booking)
                <div class="col-md-3 mb-3">
                    <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                        <img src="{{ asset('upload') }}/{{$booking->package->getimage()}}" alt=""
                             class="img-fluid position-relative border-rounded p-2">
                        <div class="reviewTag text-end pe-3 py-3 position-absolute"
                             style="left: 80%;">
                            <span class="badge bg-creamy text-danger">4.9</span>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title font-23">{{$booking->package->pkg_name}}</h4>
                            </div>
                            <div class="div">
                                <p class="card-text text-grey-three font-12">Hiking tour |
                                    Stoke on
                                    Trent</p>
                            </div>


                        </div>


                        <div class="proceding px-3 d-flex mt-2">
                            <span><b>Booking Date :</b> {{$booking->event_date}}</span>
                        </div>
                        <div class="proceding px-3 ">

                            <p class="mb-0"><b>Event Start :</b> {{$booking->event_start}}</p>
                            <p class="mb-0"><b>Event End :</b> {{$booking->event_end}}</p>
                            <p><b>Status :</b> {{$booking->status}}</p>

                        </div>
                        <div class="proceding px-3 d-flex justify-content-evenly">
                            <div class="">
                                <a href="{{ url('/user/booking/detail') }}/{{encrypt($booking->id)}}">
                                    <div class="d-inline-block rounded-1 bg-green-two p-2 detailss"
                                         data-bs-toggle="tooltip"
                                         data-bs-placement="right" title="View">
                                        <i class="fa fa-eye text-white font-24" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
