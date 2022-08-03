@extends('layouts.main')

@section('body')
    <style>
        .notes {
            height: 385px;
            overflow: auto;
        }

        .note-margin {
            margin-right: 10px;
        }

        .note-detail {
            margin-bottom: 15px;
            padding: 15px;
            background-color: #2ab1a7;
            color: white;
            border-radius: 5px;
        }

        .text-right {
            text-align: right !important;
        }
    </style>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">

                <div class="row">
                    <div class="col-lg-8 mb-3">
                        {{--  slider--}}


                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                @foreach($booking->package->getAllimage() as $image)
                                    <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                        <img class="d-block w-100 border-radios-25" src="{{asset("upload/$image")}}"
                                             alt="Package images">
                                    </div>
                                @endforeach


                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        {{--  package detail--}}

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Package Detail</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$booking->package->pkg_name}}</h6>
                                <p class="card-text">{{$booking->package->desc}}</p>
                                <p class="card-text">MAX ALLOWED: {{$booking->package->mem_allow}}</p>
                                <p class="card-text">Amount: ${{$booking->package->amount}}</p>
                                <p class="card-text">Price For: {{$booking->package->price_for}}</p>

                            </div>
                        </div>

                    </div>

                    {{--        chat--}}
                    <div class="col-12 mt-3 mb-3">
                        <div class="col-12 card ">
                            <div class="py-2 px-lg-4 px-2  border-bottom ">
                                <div class="d-flex align-items-center py-1">
                                    <div class="position-relative">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                             class="rounded-circle me-1" alt="{{$booking->getUser()->name}}" width="40"
                                             height="40">
                                    </div>
                                    <div class="flex-grow-1 ps-3">
                                        <strong>{{$booking->getUser()->name}}</strong>
{{--                                        <div class="text-success small"><em>online</em></div>--}}
                                    </div>

                                </div>
                            </div>

                            <div class="position-relative">
                                <div class="chat-messages p-4">

                                    @foreach($messages as $message)
                                        <div
                                            class="{{$message->from_id==\Auth::id() ? 'chat-message-right' : 'chat-message-left'}} pb-4">
                                            <div>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                     class="rounded-circle me-1" alt="Chris Wood" width="40"
                                                     height="40">
                                                <div class="text-muted small text-nowrap mt-2">{{$message->created_at}}</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                                <div class="font-weight-bold mb-1">{{$message->from_id==\Auth::id() ? 'You' : $message->fromUser->name}}</div>
                                                {{$message->message}}
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                            </div>

                            <div class="flex-grow-0 border-top">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="message" id="message"
                                           placeholder="Type your message">
                                    <input type="hidden" value="{{$booking->getUser()->id}}" id="user_id">
                                    <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::id()}}"
                                           id="Auth_user">
                                    <button class="btn btn-primary" id="send_msg">Send</button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>

            <div class="col-lg-4">

                <div class="row">

                    <div class="col-12">
                        {{--  booking detail--}}

                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">Booking Detail</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Customer: {{$booking->user->name}}</h6>
                                <p class="card-text">Booking Date {{$booking->event_date}}</p>
                                <p class="card-text">Booking Start Time {{$booking->event_start}}</p>
                                <p class="card-text">Booking End Time {{$booking->event_end}}</p>
                                <p class="card-text">Status
                                    <button
                                        class="btn {{$booking->checkStatus() ? 'btn-danger' : 'btn-success'}}">{{$booking->status}}</button>
                                </p>

                                <form action="{{route('booking.status',['id'=>$booking->id])}}" method="post">
                                    @csrf
                                    <select name="status" class="form-control">
                                        <option value="pending" {{$booking->status=='pending' ? 'selected' : ''}}>
                                            Pending
                                        </option>
                                        <option value="canceled" {{$booking->status=='canceled' ? 'selected' : ''}}>
                                            Canceled
                                        </option>
                                        <option value="completed" {{$booking->status=='completed' ? 'selected' : ''}}>
                                            Completed
                                        </option>
                                    </select>

                                    <button class="w-100 btn btn-secondary mt-2">UPDATE</button>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    {{--     notes--}}
                    <div class="card">
                        <div class="card-body notes">
                            <h5 class="card-title text-center">Notes</h5>
                            @foreach($notes as $note)
                                <div class="col-12 text-right">
                                    <a href="{{route('note.delete',['id'=>encrypt($note->id)])}}"><i
                                            class="fa fa-trash text-danger "></i></a>
                                </div>

                                <div class="note-detail">
                                    <span> {{$note->note}}</span>

                                    <p class="text-right">{{$note->created_at}}</p>

                                </div>
                            @endforeach


                        </div>

                        <form action="{{route('note.store')}}" method="post">
                            @csrf
                            <div class="col-12 p-2 d-flex">
                                <input type="hidden" name="booking_id" value="{{$booking->id}}">
                                <textarea rows="1" cols="2" required name="note" class="form-control note-margin"
                                          placeholder="Type your note here..."></textarea>
                                <button class="btn btn-success " type="submit">Save</button>

                            </div>
                        </form>
                    </div>
                </div>


            </div>


        </div>

    </div>

@endsection

@section('js')
    {{--    <script src="https://cdn.socket.io/4.5.0/socket.io.min.js"--}}
    {{--            integrity="sha384-7EyYLQZgWBi67fBtVxw60/OWl1kjsfrPFcaU0pp0nAh+i8FD068QogUvg85Ewy1k"--}}
    {{--            crossorigin="anonymous"></script>--}}


    {{--    <script>--}}
    {{--        //  const socket = io();--}}
    {{--        $(document).ready(function () {--}}
    {{--            let ip = window.location.hostname;--}}
    {{--            let socket_port = '3000';--}}
    {{--            let socket = io(ip + ':' + socket_port);--}}

    {{--            $('#send_msg').click(function () {--}}
    {{--                var msg = $('#message').val();--}}
    {{--                socket.emit('chatSend', msg);--}}


    {{--            })--}}

    {{--            socket.on('receiveChat', (msg) => {--}}
    {{--                console.log(msg);--}}
    {{--            })--}}


    {{--        });--}}
    {{--    </script>--}}


    <script>
        $(document).ready(function () {
            $('.chat-messages').scrollTop($('.chat-messages')[0].scrollHeight);

            $('#send_msg').click(function () {
                var msg = $('#message').val();
                var to = $('#user_id').val();
                $('#message').val('');
                $.ajax({
                    url: '{{URL::to('user/sendMSG')}}',
                    type: 'POST',
                    data: {'message': msg, 'to': to},
                    success: function (data) {

                        var dt = new Date();
                        var am=dt.getHours() >= 12 ? 'pm' : 'am';
                        var timeNow = dt.getHours() + ":" + dt.getMinutes() + " " +  am ;

                        var data = `      <div
                                            class="chat-message-right pb-4">
                                            <div>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                     class="rounded-circle me-1" alt="Chris Wood" width="40"
                                                     height="40">
                                                <div class="text-muted small text-nowrap mt-2">${timeNow}</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                                <div class="font-weight-bold mb-1">You</div>
                                                ${msg}
                </div>
            </div>`

                        $('.chat-messages').append(data);

                        $('.chat-messages').scrollTop($('.chat-messages')[0].scrollHeight);

                    }
                });


            })


        });

    </script>


    <script src="{{asset('/js/app.js')}}"></script>
    <script>
        Echo.channel('chatRoom').listen('BraodCast', (response) => {

            if (response.to == $('#Auth_user').val()) {
                var dt = new Date();
                var am=dt.getHours() >= 12 ? 'pm' : 'am';
                var timeNow = dt.getHours() + ":" + dt.getMinutes() + " " +  am ;

                var msg = `      <div  class="chat-message-left pb-4">
                                            <div>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                     class="rounded-circle me-1" alt="Chris Wood" width="40"
                                                     height="40">
                                                <div class="text-muted small text-nowrap mt-2">${timeNow}</div>
                                            </div>
                                            <div class="flex-shrink-1 bg-light rounded py-2 px-3 me-3">
                                                <div class="font-weight-bold mb-1">${response.from.name}</div>
                                                ${response.msg}
                </div>
            </div>`

                $('.chat-messages').append(msg);
            }
        })
    </script>
@endsection
