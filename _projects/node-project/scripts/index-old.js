// cd desktop/pe-projects/projects/node-project

import http from "node:http";
import fileSystem from 'node:fs';

const person = {
    "name": "Jesse"
}

// Server logic
const server = http.createServer(function (request, response) {

    if (request.url !== "/favicon.ico") {
        console.log("The request made is: " + request.url);

        if (request.url == '/') {
            response.writeHead(200, { 'Content-Type': 'text/html' });
            fileSystem.readFile('./home.html', null, function (error, data) {

                response.write(data);

                response.end();
            });

        }

        if (request.url == '/about') {
            response.writeHead(200, { 'Content-Type': 'text/html' });
            fileSystem.readFile('./about.html', null, function (error, data) {

                response.write(data);

                response.end();
            });

        }

        if (request.url == '/contact') {
            response.writeHead(200, { 'Content-Type': 'text/html' });
            fileSystem.readFile('./contact.html', null, function (error, data) {

                response.write(data);

                response.end();
            });
        }

    }
});



// Run server 
const PORT = 1994;
const HOST = 'localhost';
server.listen(PORT, HOST, function () {
    console.log(`Server runnnning at http://localhost:${PORT}`)
})