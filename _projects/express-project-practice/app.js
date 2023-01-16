import { URL } from 'url';
const __dirname = new URL('.', import.meta.url).pathname;

import fs from 'node:fs'

import express from 'express';
const app = express();
app.set('view engine', 'ejs');

import pokemonData from './data/pokemon-data.json' assert {type: 'json' }

const pokemonList = pokemonData.pokemon

// Serve up static files in public dir
app.use(express.static('public'));

// Makes data accessable to all views.
app.locals.pokemon = pokemonList

// Page routing
app.get('/', (req, res) => {

    res.render('pages/home');
});

app.get('/about', function (req, res) {
    res.sendFile("about.html", { root: __dirname });
})

app.get('/contact', function (req, res) {
    res.send("<h1>Contacting...</h1>");
})

app.get('/api', function (req, res) {
    res.send(new URL('./data/home.json', import.meta.url));
})

// These all act like if statements.. this one would be the else statement or the default, so the order matters. 
// No route defined.. 404
app.use(function (req, res) {
    res.status(404).send("Sorry can't find that!");
})


// Start App
app.listen(1994)