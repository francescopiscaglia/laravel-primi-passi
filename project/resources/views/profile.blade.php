<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <h2>
        Profilo
    </h2>

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
</body>

</html>