<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <br>
    <div class="container">
        <a href="{{url('/categories/create')}}" class="btn btn-primary btn-sm btn-oval">
            <i class="fa fa-plus"> Add Category</i>
        </a>
        <hr>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Color</td>
                    <td>Description</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $key => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->color }}</td>
                    <td>{{ $value->description }}</td>
        
                    <!-- we will also add show, edit, and delete buttons -->
                    <td>
        
                        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                        <a class="btn btn-small btn-danger" href="{{ URL::to('categories/' . $value->id) }}" onclick="return confirm('Are you sure to delete?')">Delete</a>
                        <!-- we will add this later since its a little more complicated than the other two buttons -->
        
                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                        {{-- <a class="btn btn-small btn-success" href="{{ URL::to('categories/' . $value->id) }}">Detail</a> --}}
        
                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('categories/' . $value->id . '/edit') }}">Edit</a>
        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>