// cd desktop/pe-projects/projects/node-project

import http from "node:http";
import FileSystem from 'node:fs';

var path = null;

// Server logic
const server = http.createServer((request, response) => {
    if (request.url !== "/favicon.ico") {
        console.log("The request made is: " + request.url);
        response.writeHead(200, { 'Content-Type': 'text/html' });

        switch (request.url) {
            case "/":
                path = "home.html";
                break;
            case "/about":
                path = "about.html";
                break;
            case "/contact":
                path = "contact.html";
                break;
            default:
                path = "404.html";
        }

        if (path == "404.html") {
            response.writeHead(404, { 'Content-Type': 'text/html' });
        }

        FileSystem.readFile(`${path}`, null, (error, data) => {
            if (error) {
                response.write('File not found!');
            } else {
                response.write(data);
            }
            response.end();
        });
    }
})

// Run server 
const PORT = 1994;
const HOST = 'localhost';
server.listen(PORT, HOST, function () {
    console.log(`Server runnnning at http://localhost:${PORT}`)
})