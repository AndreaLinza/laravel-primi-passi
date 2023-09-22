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


Route::get('/D', function () {

    $data = [
        "intro" => "Gli orsi sono animali affascinanti e complessi, e la loro documentazione può coprire una
        vasta gamma di argomenti, tra cui la loro biologia, comportamento, habitat, conservazione e molto altro.
        Ecco un riassunto dei principali argomenti che potresti trovare nella documentazione sugli orsi:",

        "category" => [
            [
                "title" => "1. Biologia e Classificazione:",
                "desc1" => "-Specie di orsi: Ci sono diverse specie di orsi, tra cui l'orso bruno, l'orso polare, l'orso nero, l'orso grizzly e l'orso panda. Ogni specie ha caratteristiche biologiche uniche.",
                "desc2" => "",
                "desc3" => "",
            
            ],
            [
                "title" => "2. Habitat e Distribuzione:",
                "desc1" => "- Gli orsi sono presenti in molte parti del mondo, dalle regioni artiche a quelle tropicali. La loro distribuzione geografica può variare notevolmente tra le specie.",
                "desc2" => "",
                "desc3" => "",
            ],
            [
                "title" => "3. Comportamento:",
                "desc1" => "- Comportamento alimentare: Gli orsi sono onnivori e la loro dieta può variare a seconda dell'habitat e della specie.",
                "desc2" => "- Ibernazione: Molte specie di orsi vanno in letargo durante l'inverno per conservare energia.",
                "desc3" => "- Comunicazione: Gli orsi utilizzano vari segnali vocali e comportamentali per comunicare tra loro.",

            ],
            [
                "title" => "4. Riproduzione:",
                "desc1" => "- Ciclo riproduttivo: Gli orsi hanno un ciclo riproduttivo che può variare tra le specie.",
                "desc2" => "- Cura parentale: Alcune specie di orsi mostrano una notevole cura parentale nei confronti dei loro cuccioli.",
                "desc3" => "",

            ],
            [
                "title" => "5. Conservazione:",
                "desc1" => "- Minacce: Gli orsi affrontano minacce come la perdita di habitat, la caccia illegale e il cambiamento climatico.",
                "desc2" => "- Programmi di conservazione: Ci sono svariati programmi di conservazione dedicati alla protezione degli orsi in tutto il mondo.",
                "desc3" => "",

            ],
            [
                "title" => "6. Interazioni con gli Esseri Umani:",
                "desc1" => "- Conflitti con gli esseri umani: Gli orsi possono occasionalmente entrare in conflitto con le comunità umane quando cercano cibo nelle vicinanze delle aree abitate.",
                "desc2" => "- Turismo: L'osservazione degli orsi è una fonte importante di turismo in alcune regioni.",
                "desc3" => "",

            ],
            [
                "title" => "7. Ricerca scientifica:",
                "desc1" => "- Gli orsi sono oggetto di numerosi studi scientifici per comprendere meglio la loro biologia, comportamento e interazioni con l'ambiente.",
                "desc2" => "",
                "desc3" => "",
            ],
            [
                "title" => "8. Mitologia e Cultura:",
                "desc1" => "- Gli orsi sono stati oggetto di miti, leggende e simbolismo in molte culture in tutto il mondo. Questi animali sono spesso associati a significati culturali e spirituali.",
                "desc2" => "",
                "desc3" => "",

            ],
        ],
        "info" => "Per ulteriori informazioni sulla documentazione sugli orsi, puoi consultare libri, articoli scientifici, documentari naturalistici e risorse online fornite da organizzazioni di conservazione della fauna selvatica e istituzioni scientifiche. Assicurati di specificare la specie di orso o l'argomento specifico di tuo interesse per ottenere informazioni dettagliate."
    ];

    return view("documentation", $data);
});

Route::get('/1', function () {
    $data = [
        "htmlBear" => [

            "name" => "HBML: HyperBear Markup Language",
            "description" => "HTML è il linguaggio di markup per la creazione di pagine web. Utilizza tag per strutturare il contenuto. I browser web lo interpretano per visualizzare le pagine.",
            "img" => "https://play-lh.googleusercontent.com/RslBy1o2NEBYUdRjQtUqLbN-ZM2hpks1mHPMiHMrpAuLqxeBPcFSAjo65nQHbTA53YYn=w240-h480-rw"


        ]

    ];
    return view("hbmlLanguage", $data);
});




Route::get('/2', function () {
    return view("documentation");
});
Route::get('/3', function () {
    return view("documentation");
});
Route::get('/4', function () {
    return view("documentation");
});
Route::get('/5', function () {
    return view("documentation");
});
Route::get('/6', function () {
    return view("documentation");
});
Route::get('/7', function () {
    return view("documentation");
});
Route::get('/8', function () {
    return view("documentation");
});
Route::get('/9', function () {
    return view("documentation");
});
