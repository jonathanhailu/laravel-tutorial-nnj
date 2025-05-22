<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
</head>
<body>
    
    <header>
        <nav>
            <ul>
                <h1>Ninjas Network</h1>
                <li><a href="/">Home</a></li>
                <li><a href="/ninjas">Ninjas</a></li>
                <li><a href="/ninjas/create">Create New Ninja</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        {{ $slot }} 
        <!-- This is where the content of the child views will be injected -->
    </main>
</body>
</html>