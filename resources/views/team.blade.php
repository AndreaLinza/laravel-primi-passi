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

    <header>
        <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary py-3" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="/"><img class="navbar-brand-logo box-shadow" src="/bearIcon.jpg"
                        alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav fs-5 text-sm-center me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Doc">Docs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/Team">Our Teams</a>
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
        <div class="container mt-5 pt-5">

            <h1 class="text-center display-3 mt-5 fw-bold">TheTeachers</h1>
            <div class="row row-cols-1 row-cols-lg-3 mt-2 g-5">
                @foreach ($teachers as $teacher)
                    <div class="col">
                        <div class="card box-shadow">
                            <img src={{ $teacher['img'] }} class="card-img-top rounded-circle" alt="...">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h3 class="card-title fw-bold text-center">{{ $teacher['name'] }}</h3>
                                <p class="card-text text-center px-2"> {{ $teacher['description'] }} </p>
                                <a href="/Me"
                                    class="btn btn-outline-dark w-50 mx-auto py-2 my-3">Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <h1 class="text-center display-3 mt-5 fw-bold">TheBestTeams<br>(LikeTheBestMazzo)</h1>
            <div class="row mt-2 row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5">
                @foreach ($beasts as $beast)
                    <div class="col">
                        <div class="card box-shadow">
                            <img src={{ $beast['img'] }} class="card-img-top rounded-circle" alt="...">
                            <div class="card-body d-flex flex-column ">
                                <h3 class="card-title fw-bold text-center ">{{ $beast['name'] }}</h3>
                                <p class="card-text px-2 mt-auto"> {{ $beast['description'] }} </p>
                                <a href="/Me"
                                    class="btn btn-outline-dark w-50 mx-auto py-2 mt-auto">Dettagli</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </main>

    <footer class="bg-dark mt-5">
        <div class="container">
            <div class="py-5">
                <p class="m-0 text-white">Contatti: +999 99999</p>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
