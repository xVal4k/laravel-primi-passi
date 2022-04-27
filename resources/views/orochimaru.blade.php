<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body, html {
            font-family: 'Nunito', sans-serif;
            background-color: #fff;
            color: #636b6f;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h3 {
            width: 75%;
            margin: 1.5rem auto;
        }

        a {
            font-size: 18px;
            text-decoration: none;
            color: black;
            padding: .5rem;
            margin: 1.5rem;
            border-bottom: solid 2px transparent;
            display: inline-block;
        }

        a:hover {
            border-bottom: solid 2px blue;
        }
    </style>
</head>
<body>
    <div class="container">
    <h2>{{ $name }}</h2>
    <h3>{{ $quote }}</h3>
    <img src="{{ $src }}" alt="{{ $name }}"> <br>
    <a href="{{ route('home') }}">Home</a>
    </div>
</body>
</html>
