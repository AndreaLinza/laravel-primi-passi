<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
        "arguments" => [
            [
                "id" => "1",
                "name" => "HTML: HyperText Markup Language",
                "description" => "HTML è il linguaggio di markup per la creazione di pagine web. Utilizza tag per strutturare il contenuto. I browser web lo interpretano per visualizzare le pagine.",
                "img" => "https://play-lh.googleusercontent.com/RslBy1o2NEBYUdRjQtUqLbN-ZM2hpks1mHPMiHMrpAuLqxeBPcFSAjo65nQHbTA53YYn=w240-h480-rw"
            ],
            [
                "id" => "2",
                "name" => "CSS: Cascading Style Sheets",
                "description" => "CSS è un linguaggio utilizzato per definire lo stile e la formattazione di pagine web. Attraverso regole di stile, specifica come gli elementi HTML dovrebbero essere visualizzati sullo schermo.",
                "img" => "https://play-lh.googleusercontent.com/RTAZb9E639F4JBcuBRTPEk9_92I-kaKgBMw4LFxTGhdCQeqWukXh74rTngbQpBVGxqo=w240-h480-rw"
            ],
            [
                "id" => "3",
                "name" => "Bootstrap",
                "description" => "Bootstrap: Framework front-end per lo sviluppo web rapido e responsive.",
                "img" => "https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo-shadow.png"
            ],
            [
                "id" => "4",
                "name" => "SASS",
                "description" => "Sass: Linguaggio di estensione CSS per semplificare e migliorare la scrittura di fogli di stile.",
                "img" => "https://cdn.mos.cms.futurecdn.net/TTgVoW3Q5WPkMBHi2VD59Q-970-80.jpg.webp"
            ],
            [
                "id" => "5",
                "name" => "Javascript",
                "description" => "JavaScript: Linguaggio di programmazione web per rendere le pagine interattive e dinamiche nei browser.",
                "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/512px-Unofficial_JavaScript_logo_2.svg.png"
            ],
            [
                "id" => "6",
                "name" => "Vue.js",
                "description" => "Vue.js: Libreria JavaScript per la creazione di interfacce utente reattive e componentizzate nelle applicazioni web.",
                "img" => "https://i2.wp.com/www.onasus.com/wp-content/uploads/2018/04/vuejs-javascript-framework.jpg?fit=544%2C550&ssl=1"
            ],
            [
                "id" => "7",
                "name" => "PHP",
                "description" => "PHP: Linguaggio di scripting ampiamente utilizzato per lo sviluppo web server-side.",
                "img" => "https://www.html.it/app/uploads/2014/04/php.png"
            ],
            [
                "id" => "8",
                "name" => "MySql",
                "description" => "PHP: Linguaggio di scripting ampiamente utilizzato per lo sviluppo web server-side.",
                "img" => "https://www.elearningworld.org/wp-content/uploads/2019/04/MySQL.svg.png"
            ],
            [
                "id" => "9",
                "name" => "Laravel",
                "description" => "Laravel: Framework PHP open-source per lo sviluppo di applicazioni web scalabili e robuste con un'elevata produttività.",
                "img" => "https://customcodefactory.com/wp-content/uploads/2019/11/Laravel-logo-300x300.jpg"
            ],
        ]
    ];


    return view("home", $data);
});
