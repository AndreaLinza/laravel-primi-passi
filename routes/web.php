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


Route::get('/Doc', function () {

    $data = [
        "intro" => "Gli orsi sono animali affascinanti e complessi, e la loro documentazione può coprire una
        vasta gamma di argomenti, tra cui la loro biologia, comportamento, habitat, conservazione e molto altro.
        Ecco un riassunto dei principali argomenti che potresti trovare nella documentazione sugli orsi:",

        "category" => [
            [
                "ID" => "1",
                "title" => "1. Biologia e Classificazione:",
                "desc1" => "- Specie di orsi: Ci sono diverse specie di orsi, tra cui l'orso bruno, l'orso polare, l'orso nero, l'orso grizzly e l'orso panda. Ogni specie ha caratteristiche biologiche uniche.",
                "desc2" => "",
                "desc3" => "",

            ],
            [
                "ID" => "2",
                "title" => "2. Habitat e Distribuzione:",
                "desc1" => "- Gli orsi sono presenti in molte parti del mondo, dalle regioni artiche a quelle tropicali. La loro distribuzione geografica può variare notevolmente tra le specie.",
                "desc2" => "",
                "desc3" => "",
            ],
            [
                "ID" => "3",
                "title" => "3. Comportamento:",
                "desc1" => "- Comportamento alimentare: Gli orsi sono onnivori e la loro dieta può variare a seconda dell'habitat e della specie.",
                "desc2" => "- Ibernazione: Molte specie di orsi vanno in letargo durante l'inverno per conservare energia.",
                "desc3" => "- Comunicazione: Gli orsi utilizzano vari segnali vocali e comportamentali per comunicare tra loro.",

            ],
            [
                "ID" => "4",
                "title" => "4. Riproduzione:",
                "desc1" => "- Ciclo riproduttivo: Gli orsi hanno un ciclo riproduttivo che può variare tra le specie.",
                "desc2" => "- Cura parentale: Alcune specie di orsi mostrano una notevole cura parentale nei confronti dei loro cuccioli.",
                "desc3" => "",

            ],
            [
                "ID" => "5",
                "title" => "5. Conservazione:",
                "desc1" => "- Minacce: Gli orsi affrontano minacce come la perdita di habitat, la caccia illegale e il cambiamento climatico.",
                "desc2" => "- Programmi di conservazione: Ci sono svariati programmi di conservazione dedicati alla protezione degli orsi in tutto il mondo.",
                "desc3" => "",

            ],
            [
                "ID" => "6",
                "title" => "6. Interazioni con gli Esseri Umani:",
                "desc1" => "- Conflitti con gli esseri umani: Gli orsi possono occasionalmente entrare in conflitto con le comunità umane quando cercano cibo nelle vicinanze delle aree abitate.",
                "desc2" => "- Turismo: L'osservazione degli orsi è una fonte importante di turismo in alcune regioni.",
                "desc3" => "",

            ],
            [
                "ID" => "7",
                "title" => "7. Ricerca scientifica:",
                "desc1" => "- Gli orsi sono oggetto di numerosi studi scientifici per comprendere meglio la loro biologia, comportamento e interazioni con l'ambiente.",
                "desc2" => "",
                "desc3" => "",
            ],
            [
                "ID" => "8",
                "title" => "8. Mitologia e Cultura:",
                "desc1" => "- Gli orsi sono stati oggetto di miti, leggende e simbolismo in molte culture in tutto il mondo. Questi animali sono spesso associati a significati culturali e spirituali.",
                "desc2" => "",
                "desc3" => "",

            ],
            [
                "ID" => "9",
                "title" => "9. Comportamento Sociale:",
                "desc1" => "- Alcune specie di orsi, come l'orso bruno, possono mostrare comportamenti sociali, come l'interazione tra individui nella ricerca di cibo o durante la stagione degli amori.",
                "desc2" => "",
                "desc3" => "",

            ]
        ],
        "info" => "Per ulteriori informazioni sulla documentazione sugli orsi, puoi consultare libri, articoli scientifici, documentari naturalistici e risorse online fornite da organizzazioni di conservazione della fauna selvatica e istituzioni scientifiche. 
        Assicurati di specificare la specie di orso o l'argomento specifico di tuo interesse per ottenere informazioni dettagliate."
    ];

    return view("documentation", $data);
});

Route::get('/Team', function () {
    $data = [

        "teachers" => [
            [
                "id" => "Michele",
                "name" => "Michele Spiller",
                "description" => "Teacher Assistant",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U02Q4SRLRB5-9f4f3e7ffdfe-512"
            ],
            [
                "id" => "Florian",
                "name" => "Florian Leica",
                "description" => "Main Teacher",
                //"img" => "/Kudi.png",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U01MEKP8WH5-135a27c290f8-512" // Flo

            ],
            [
                "id" => "Alessio",
                "name" => "Alessio Crea",
                "description" => "Teacher Assistant",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U02DZTS8S22-abd05bb75c1d-512"
            ],

        ],

        "beasts" => [
            [
                "id" => "Lorem",
                "name" => "HTMLorenzo Phyton Filograna",
                "description" => "Dota 2 Player is for Chad, LOL is for p****. If you can, change my mind Beta",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U057SU3MJHM-777cbbc73443-512"
            ],
            [
                "id" => "GiugNHC",
                "name" => "Giada CSSorrado | Non ho capito",
                "description" => "I'm feeling like Max Verstappen, but i have a longer d***! My craving of sushi it's over 9000, you stupid bastard!! Sorry I'm hungry😔 ",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U0586K2541H-077eab823975-512",
                //"img" => "/Giug.png"
            ],
            [
                "id" => "RicCarl",
                "name" => "L'altro Riccardo Bootstrap Linza",
                "description" => "Those courses are made for very genshin person who known how much genshin u must be to live in a ganshin woirld like this. Genshin!
                Why you're not playing Core Keeper Salvo & Pietro?",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U058A5FA76G-60fab47544f4-512"
            ],
            [
                "id" => "BrotherBearClown",
                "name" => "SASSalvatore Bono",
                "description" => "Eccoci qua, this is the most EASY way to improve your Easy life. I mean is really too Easy!! I think i've some power... maybe I'm Mais Mojaies 🐻",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U0586LB2FH8-f425d39a72cc-512"
            ],
            [
                "id" => "Pizzo",
                "name" => "Pas'q'cal Pasolino",
                "description" => "If you need protection, I'm the person you're looking for... for a fair fee. Especially if you need your car 😉 ",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U05849LJPJ9-b267f11b13ed-512"
            ],
            [
                "id" => "Yamete",
                "name" => "VUEalerio C++",
                "description" => 'I would say: "Ho tante noci di cocco splendide, diddidi, tutte in fila per tre pre tre per tre!! Grandi grosse anche più grandi di te", but it`s not my line',
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U05847B6H6Z-73fe375d2637-512"
            ],
            [
                "id" => "TheFather",
                "name" => "Phpietro Leone",
                "description" => "I'm a Pro Player of Hearthstone. I can give you TheBestMazzo in the game. If my Teacher Andrangular allows me",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U058916MPN0-74b16a752773-512"
            ],
            [
                "id" => "BrotherBear",
                "name" => "SQLimone React Dota Pythonrrega",
                "description" => "Do you need a Blue Yeti? I have to sold 5 of 'em. If you don't want to buy somethin let me eat my ice-cream!! If you wont, I can carry you on Guild Wars2 the best Game Ever",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U05890LJTQC-60d5020ca8bc-512"
            ],
            [
                "id" => "NaCosa",
                "name" => "Matteo Laravel Shady(NC)",
                "description" => "Sometimes my cam it's foggy, but it's only Na' Cosa momentanea, don't worry. 
                😶‍🌫️😶‍🌫️😶‍🌫️😶‍🌫️😶‍🌫️😶‍🌫️😶‍🌫️😶‍🌫️",
                "img" => "https://ca.slack-edge.com/T91QPE3BP-U0587L8SGAF-851da8299666-512"
            ],
        ]
    ];


    return view("team", $data);
});

Route::get('/Me', function (){
    $data = [
        "creator" => [
            "name" => "ANDRANGULAR Carluccio",
            "description" => "Mi disp ma sono KO per questa volta mi fermo qua.
            Frasi rubate dalla repo di my broda Vale",
            "img" => "/me.png",
        ]

    ];
    return view("Teams.inProgress", $data);
});



Route::get('/1', function () {
    $data = [
        "hBearMl" => [
            "name" => "Biologia e Classificazione:",
            "description" => "Specie di orsi: Ci sono diverse specie di orsi, tra cui l'orso bruno, l'orso polare, l'orso nero, l'orso grizzly e l'orso panda. Ogni specie ha caratteristiche biologiche uniche.",
            "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/European_Brown_Bear.jpg/1200px-European_Brown_Bear.jpg",
            "author" => "HTMLorenzo Phyton Filograna"
        ]

    ];
    return view("Pages.hBearMlLanguage", $data);
});

Route::get('/2', function () {
    $data = [

        "orCSSo" => [
            "name" => "Habitat e Distribuzione:",
            "description" => "Gli orsi sono presenti in molte parti del mondo, dalle regioni artiche a quelle tropicali. La loro distribuzione geografica può variare notevolmente tra le specie.",
            "img" => "https://www.regione.abruzzo.it/sites/default/files/styles/1460x990/public/field/image/stampa/Orso_bruno_marsicano.jpg?itok=5MNzIqTv",
            "author" => "Giada CSSorrado | Non ho capito"
        ]
    ];
    return view("Pages.orCssoLanguage", $data);
});

Route::get('/3', function () {
    $data = [

        "bearStrap" => [
            "name" => "Comportamento:",
            "description" => "Comportamento alimentare: Gli orsi sono onnivori e la loro dieta può variare a seconda dell'habitat e della specie. 
            Ibernazione: Molte specie di orsi vanno in letargo durante l'inverno per conservare energia. 
            Comunicazione: Gli orsi utilizzano vari segnali vocali e comportamentali per comunicare tra loro.",
            "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Grolar.JPG/640px-Grolar.JPG",
            "author" => "L'altro Riccardo Bootstrap Linza"
        ]
    ];
    return view("Pages.bearStrapLanguage", $data);
});

Route::get('/4', function () {
    $data = [

        "orSASS" => [
            "name" => "Riproduzione:",
            "description" => " Ciclo riproduttivo: Gli orsi hanno un ciclo riproduttivo che può variare tra le specie. 
            Cura parentale: Alcune specie di orsi mostrano una notevole cura parentale nei confronti dei loro cuccioli.",
            "img" => "https://www.ilmeteo.it/portale/files/giornale/orso-russo-021222.jpg",
            "author" => "SASSalvatore Bono"
        ]
    ];
    return view("Pages.orSASSLanguage", $data);
});

Route::get('/5', function () {
    $data = [

        "javaSMorales" => [
            "name" => "Conservazione:",
            "description" => "Minacce: Gli orsi affrontano minacce come la perdita di habitat, la caccia illegale e il cambiamento climatico. 
            Programmi di conservazione: Ci sono svariati programmi di conservazione dedicati alla protezione degli orsi in tutto il mondo.",
            "img" => "https://assetsio.reedpopcdn.com/miles-morales-header.jpg?width=1200&height=900&fit=crop&quality=100&format=png&enable=upscale&auto=webp",
            "author" => "Pas'q'cal Pasolino"
        ]
    ];
    return view("Pages.javaSMoralesLanguage", $data);
});

Route::get('/6', function () {
    $data = [

        "vueMais" => [
            "name" => "Interazioni con gli Esseri Umani:",
            "description" => "Conflitti con gli esseri umani: Gli orsi possono occasionalmente entrare in conflitto con le comunità umane quando cercano cibo nelle vicinanze delle aree abitate. 
            Turismo: L'osservazione degli orsi è una fonte importante di turismo in alcune regioni.",
            "img" => "https://images.twinkl.co.uk/tw1n/image/private/t_630/u/ux/miles-no-mask_ver_1.png",
            "author" => "VUEalerio C++"
        ]
    ];
    return view("Pages.vueMaisLanguage", $data);
});

Route::get('/7', function () {
    $data = [

        "PearHPorales" => [
            "name" => "Ricerca scientifica:",
            "description" => "Gli orsi sono oggetto di numerosi studi scientifici per comprendere meglio la loro biologia, comportamento e interazioni con l'ambiente.",
            "img" => "/OrsoMorales.png",
            "author" => "Phpietro Leone"
        ]
    ];
    return view("Pages.pearHPoralesLanguage", $data);
});

Route::get('/8', function () {
    $data = [

        "maiSQorales" => [
            "name" => "Mitologia e Cultura:",
            "description" => "Gli orsi sono stati oggetto di miti, leggende e simbolismo in molte culture in tutto il mondo. Questi animali sono spesso associati a significati culturali e spirituali.",
            "img" => "https://i.kym-cdn.com/entries/icons/facebook/000/045/324/cover19.jpg",
            "author" => "SQLimone React Dota Pythonrrega"
        ]
    ];
    return view("Pages.maiSQoralesLanguage", $data);
});

Route::get('/9', function () {
    $data = [

        "lorsoWeed" => [
            "name" => "Comportamento Sociale:",
            "description" => "Alcune specie di orsi, come l'orso bruno, possono mostrare comportamenti sociali, come l'interazione tra individui nella ricerca di cibo o durante la stagione degli amori.",
            "img" => "/TheOrso.jpg",
            "author" => "Matteo Laravel Shady"
        ]
    ];
    return view("Pages.lorsoWeedLanguage", $data);
});
