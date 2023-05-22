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
    <div class="container">
        <div class="row">
            @foreach($data as $key => $shoe)
                <div class="item d-inline col-3 mt-3 mb-3">
                    <a href="/show/{{ $shoe['id'] }}">
                        <h3>{{$shoe->name}}</h3>
                        <h3>{{'$ '.$shoe->price}}</h3>
                        <h3>{{$brands[$key]}}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>