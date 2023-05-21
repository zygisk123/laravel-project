<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('cdn')
    <title>Show</title>
</head>
<body>
    <header>
        @include('navbar')
    </header>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h1>Show</h1>
                <h1>{{$shoe->name}}</h1>
                <h3>Price: {{'$ ' . $shoe->price}}</h3>
                <h3>Brand: {{$selectedBrand->name}}</h3>
                <div class="row">
                    <div class="col-2">
                        <form action="/edit/{{$shoe->id}}" method="get">
                            <input type="hidden" name="shoe" value="{{ $shoe }}">
                            <button type="submit" name='edit' class="btn btn-info">Edit</button>
                        </form>
                    </div>
                    <div class="col-2">
                        <form action="/delete" method="get">
                            <input type="hidden" name="id" value="{{$shoe['id']}}">
                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    <div class="col-8"></div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>