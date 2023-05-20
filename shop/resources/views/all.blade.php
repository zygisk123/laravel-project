<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('cdn')
    <title>All</title>
</head>
<body>
    <header>
        @include('navbar')
    </header>
    <h1>All</h1>
    @foreach($data as $shoe)
        <a href="/show/{{ $shoe['id'] }}">
            <div>
                <h2>{{$shoe['name']}}</h2>
                <h2>{{$shoe['price']}}</h2>
                <h2>{{$shoe['brand']}}</h2>
            </div>
        </a>
    @endforeach
</body>
</html>