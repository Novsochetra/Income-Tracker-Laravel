@extends('layouts.app')
@section('content')
  <section class="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
        <div class="jumbotron">
          <h4 class="display-5">Add Category</h4>
          <hr class="my-4">
          <div>
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
                  <div class=form-row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Category Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $category->name }}" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" name="color" value="{{ $category->color }}" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Description</label>
                      <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" >{{ $category->description }}</textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button class="btn btn-primary" type="submit">Update form</button>
                    <a href="{{url()->previous()}}" class="btn btn-primary" type="submit">back</a>
                  </div>                  
              </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
@endsection

{{-- @extends('layouts.app')
@section('content')
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
@endsection --}}