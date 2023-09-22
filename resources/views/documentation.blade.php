<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primi passi</title>
    {{-- Favicon --}}
    <link rel="icon"type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
    {{-- Librerie terze parti --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Taviraj:wght@500;600&display=swap" rel="stylesheet">
    {{-- CSS Style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

    <header class="mb-5">
        <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary py-3" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="/"><img class="navbar-brand-logo" src="/bearIcon.jpg"
                        alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/D">Docs</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <div class="container ">
            <h2 class="text-center fw-bold display-2 pb-4">Documentazione</h2>
            <div class="bg-white p-5 box-shadow">

                <h3 class="mb-4">{{$intro}}</h3>
                    
                    @foreach ($category as $cat)
                    <h4 class="py-4"> {{ $cat['title'] }} </h4>
                    <p class="fs-5"> {{ $cat['desc1'] }} </p>
                    <p class="fs-5"> {{ $cat['desc2'] }} </p>
                    <p class="fs-5"> {{ $cat['desc3'] }} </p>
                    @endforeach
                                
            </div>
        </div>
    </main>

</body>

</html>
