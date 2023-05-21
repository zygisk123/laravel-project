<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('cdn')
    <title>Add</title>
</head>
<body>
    <header>
        @include('navbar')
    </header>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h1>Add</h1>
                <form action='add' method='post'>
                    @csrf
                    <div class="mb-3">
                        <label for="formShoesName" class="form-label">Shoes Name</label>
                        <input type="text" class="form-control" id="formShoesName" name='shoesName'>
                    </div>
                    <div class="mb-3">
                        <label for="formShoesPrice" class="form-label">Shoes Price</label>
                        <input type="number" class="form-control" id="formShoesPrice" name='shoesPrice'>
                    </div>
                    <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name='shoesBrand'>
                        <option selected>Select brand</option>
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>