<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

</head>
<body></body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.socket.io/4.5.0/socket.io.min.js"
        integrity="sha384-7EyYLQZgWBi67fBtVxw60/OWl1kjsfrPFcaU0pp0nAh+i8FD068QogUvg85Ewy1k"
        crossorigin="anonymous"></script>


<script>
    //  const socket = io();
    $(document).ready(function () {
        let ip = '127.0.0.1';
        let socket_port = '3000';
        let socket = io(ip + ':' + socket_port);
        socket.emit('chatSend','hii');
        socket.on('receiveChat',(msg)=>{
            console.log(msg);
        })


    });
</script>
</html>
