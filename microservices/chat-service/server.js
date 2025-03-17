const express = require('express');
const path = require('path');

const app = express();
const server = require('http').createServer(app);
const io = require('socket.io')(server, {
    cors: {
        origin: '*'
    }
});

app.use(express.static(path.join(__dirname, 'public')));
app.set('views', path.join(__dirname, 'public'));
app.engine('html', require('ejs').renderFile);
app.set('view engine', 'html');

app.get('/', (req, res) => {
    res.render('index.html');
});

let messages = [];
io.on('connection', (socket) => {
    console.log('A user connected:', socket.id);

    socket.on('message', data => {
        console.log(data);
        messages.push(data);
        socket.broadcast.emit('receiveMessage', data);
       // io.emit('message', data); // Envia a mensagem para todos os clientes conectados
    });

    socket.on('disconnect', () => {
        console.log('User disconnected');
    });
});

server.listen(3001, () => {
    console.log('Server running on http://localhost:3001');
});
