<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World!</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .links {
            text-align: center;
            margin: 2.5rem auto;
        }
        a {
            font-size: 18px;
            text-decoration: none;
            color: black;
            padding: .5rem;
            margin: 0 1.5rem;
            border-bottom: solid 2px transparent;
        }

        a:hover {
            border-bottom: solid 2px blue;
        }
    </style>
</head>
<body>
<h1>{{ $title }}</h1>
<h2>{{ $text }}</h2>

<div class="links">
    <a href="{{ route('naruto') }}">Naruto Uzumaki</a>
    <a href="{{ route('obito') }}">Obito Uchiha</a>
    <a href="{{ route('jiraiya') }}">Jiraiya</a>
    <a href="{{ route('itachi') }}">Itachi Uchiha</a>
    <a href="{{ route('orochimaru') }}">Orochimaru</a>
    <a href="{{ route('sakura') }}">Sakura Haruno</a>
    <a href="{{ route('madara') }}">Madara Uchiha</a>
</div>


</body>
</html>
