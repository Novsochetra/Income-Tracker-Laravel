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
              <form method="post" action="{{url('categories')}}">
                  @csrf
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="name">Category Name:</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" name="color"/>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-6">
                      <label for="exampleFormControlTextarea1">Description</label>
                      <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                  </div>
                  <br>
                  <button class="btn btn-primary" type="submit">Submit form</button>
                  <a href="{{url()->previous()}}" class="btn btn-primary" type="submit">back</a>
                         
              </form>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
@endsection