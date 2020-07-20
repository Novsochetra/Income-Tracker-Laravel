@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-12">
    <div class="jumbotron">
      <h4 class="display-5">Show Category</h4>
      <hr class="my-4">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationTooltip01">Name</label>
          <input type="text" class="form-control" id="validationTooltip01" value="{{$category->name}}" readonly>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationTooltip02">color</label>
          <input type="text" class="form-control" id="validationTooltip02" value="{{$category->color}}" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" readonly>{{$category->description}}</textarea>
        </div>


        <a href="{{url()->previous()}}" class="btn btn-primary" type="submit">back</a>
      </form>

    </div>
    </div> 
  </div>
</div>
@endsection