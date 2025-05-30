<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
        </ul>
    </nav>
    <h1>About US</h1>

    <h1>{{ "Ali Baba" }}</h1>
    @php
        $full_name = "Ali Raza";
        $value = 2;
        $names = ["Madiha", "Jannat", "Fahad", "Ujala", "Javeriya", "Rose"];
    @endphp

    <h2>{{ $full_name }}</h2>

    @if ($value > 3)
        <p>{{ "$value is greater than 3"}}</p>
    @elseif ($value < 3)
        <p>{{ "$value is less than 3"}}</p>
    @else
        <p>{{ "$value is 3"}}</p>        
    @endif

    <ol>        
        @foreach ($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ol>
</body>
</html>