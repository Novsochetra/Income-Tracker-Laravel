@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{url('/categories/create')}}">
            <i class="btn btn-outline-success"> Add Category</i>
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
                        {{-- <a class="btn btn-small btn-danger" href="{{ URL::to('categories/' . $value->id) }}" onclick="return confirm('Are you sure to delete?')">Delete</a> --}}
                        <form action="/categories/{{$value->id}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-small btn-danger">Delete</button> 
                        </form>
                        <!-- we will add this later since its a little more complicated than the other two buttons -->
        
                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                        <a class="btn btn-small btn-success" href="{{ URL::to('categories/' . $value->id) }}">Detail</a>
        
                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                        <a class="btn btn-small btn-info" href="{{ URL::to('categories/' . $value->id . '/edit') }}">Edit</a>
        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection