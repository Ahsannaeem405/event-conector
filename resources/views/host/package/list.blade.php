@extends('layouts.main')

@section('body')

    <section class="trending my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mb-3 fontw700">Trending 2022</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>

                <div class="col-12">

                            @foreach($packages as $pkg)
                                <div class=" p-4 {{$loop->first ? "active": ""}}">
                                    <div class="row">

                                            <div class="col-md-4 mb-3">
                                                <div class="card shadowDiv border-rounded-1 border-1 pb-3">
                                                    <img src="{{ asset('upload') }}/{{$pkg->getimage()}}" alt=""
                                                         class="img-fluid position-relative border-rounded p-2">
                                                    <div class="reviewTag text-end pe-3 py-3 position-absolute"
                                                         style="left: 80%;">
                                                        <span class="badge bg-creamy text-danger">4.9</span>
                                                    </div>
                                                    <div class="card-body pb-0">
                                                        <div class="d-flex justify-content-between">
                                                            <a href="{{url("user/package/detail/".encrypt($pkg->id))}}"> <h4 class="card-title font-23">{{$pkg->pkg_name}}</h4></a>
                                                            <i class="pointer fa fa-heart  @auth{{ $pkg->favourite ? "text-danger" : "text-grey-three" }}   addfav @endauth pt-2 " id="{{$pkg->id}}" businessid="package"></i>
                                                        </div>
                                                        <div class="div">
                                                            <p class="card-text text-grey-three font-12">Hiking tour |
                                                                Stoke on
                                                                Trent</p>
                                                        </div>

                                                        <div>
                                                            <p class="font-9 mb-0 my-3">From</p>

                                                        </div>

                                                        <div class="pricing-review d-flex justify-content-between">
                                                            <div class="pricing">
                                                                <h4>${{$pkg->amount}}</h4>
                                                            </div>
                                                            <div class="font-10">
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star checked"></span>
                                                                <span class="fa fa-star"></span>
                                                                <span class="fa fa-star"></span>
                                                                <div class="varies">
                                                                    <p class="mb-0 pt-2 text-end text-grey-one">
                                                                        4.7(108)</p>
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
                                                            <p class="text-grey-one font-15 mb-0 pt-1 ps-1">Free
                                                                Cancellation
                                                            </p>
                                                        </div>

                                                        <div class="div d-flex">
                                                            <a><i class="fa fa-star checked text-grey-one font-9"></i></a>
                                                            <p class="text-grey-one font-15 mb-0 pt-1 ps-1">New on
                                                                Entrada</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')

@endsection
