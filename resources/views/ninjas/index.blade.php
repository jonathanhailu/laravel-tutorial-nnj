<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninjas Network | Home</title>
</head>
<body>
    <h2>Curently avialable ninjas</h2>
    @if($greeting == "Hello")
        <p>Welcome to the ninjas networks</p>
    @endif

    <ul>
        @foreach($ninjas as $ninja)
             <li>
                <p> {{ $ninja["name"] }}</p>
                <a href="/ninjas/{{ $ninja["id"] }}">
                   View Details
                </a>
            </li>  
        @endforeach
    </ul>
</body>
</html>