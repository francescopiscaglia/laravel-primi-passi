<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Hello World</h1>

    <nav>
        <ul>
            <li>
                <a href="{{ route("home") }}">Homepage</a>
            </li>
            <li>
                <a href=" {{ route("profile") }}">Profile</a>
            </li>
            <li>
                <a href=" {{ route("cart") }}">Cart</a>
            </li>
        </ul>
    </nav>


    <p>
        {{$info}}
    </p>

    @php
        $names = ["chiara", "gabriel", "francesco"];
    @endphp


    <ul>
        @foreach ($names as $nome)
        <li>{{$nome}}</li>
        @endforeach
    </ul>
</body>

</html>