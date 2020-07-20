<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Update Categpry</title>
</head>
<body>
    <div class="container">
<section class="content">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Update Category</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <br /> 
    @endif
    <form method="post" action="{{ url('/categories', $category->id) }}">
        @method('PUT') 
        @csrf
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label for="name">Name :</label>
                <input type="text" class="form-control" name="name" value="{{ $category->name }}" />
            </div>

            <div class="form-group col-md-6">
                <label for="color">Color :</label>
                <input type="text" class="form-control" name="color" value="{{ $category->color }}" />
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group col-md-6">
                <label for="description">Description :</label>
                <input type="text" class="form-control" name="description" value="{{ $category->description }}" />
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Update</button>            
        </div>
    </form>
</div>
    </section>
    </div>
</body>
</html>