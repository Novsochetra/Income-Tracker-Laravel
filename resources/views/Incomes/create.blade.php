@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      <div class="jumbotron">
        <h4 class="display-5">Add Income</h4>
        <hr class="my-4">
        <form class="needs-validation" action="/incomes" novalidate method="POST">
          @csrf
          @method("POST")
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationTooltip01">Title</label>
              <input name="title" type="text" class="form-control" id="validationTooltip01" value="" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="validationTooltip02">Amount</label>
              <input name="amount" type="text" class="form-control" id="validationTooltip02" value="" required>
              <div class="valid-tooltip">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
        
        
          <button class="btn btn-primary" type="submit">Submit form</button>
          <a href="{{url()->previous()}}" class="btn btn-primary" type="submit">back</a>
        </form>
      
      </div>
      </div> 
    </div>
  </div>
@endsection