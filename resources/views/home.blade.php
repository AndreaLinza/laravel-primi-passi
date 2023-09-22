<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primi passi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/app.css">

</head>

<body>


    <main>
        <div class="container">

            <div class="row row-cols-3 ">
                @foreach ($arguments as $singleArg)
                    <div class="card" style="width: 18rem;">
                        <img src={{ $singleArg['img'] }} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$singleArg["name"]}}</h5>
                            <p class="card-text"> {{$singleArg["description"]}} </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </main>

</body>

</html>
