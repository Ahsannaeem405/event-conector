const express = require('express');
const app = express();
const http = require('http');
const server = http.createServer(app);
const {Server} = require("socket.io");
const io = new Server(server, {
    cors: {origin: "*"}
});


io.on('connection', (socket) => {
    console.log('a user connected');


    socket.on('chatSend', (message) => {
        io.sockets.emit('receiveChat', message);
    })
    socket.on('disconnect', (socket) => {
        console.log('disconnect')
    })
});


server.listen(3000, () => {
    console.log('listening on *:3000');
});


