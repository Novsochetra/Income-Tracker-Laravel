<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<div class="container">
  <div class="row">
    <div class="col-sm-12">
    <div class="jumbotron">
      <h4 class="display-5">Show Income</h4>
      <hr class="my-4">
      <form class="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="validationTooltip01">Title</label>
          <input type="text" class="form-control" id="validationTooltip01" value="{{$income->name}}" readonly>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationTooltip02">Amount</label>
          <input type="text" class="form-control" id="validationTooltip02" value="{{$income->amount}}" readonly>
            <div class="valid-tooltip">
              Looks good!
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Description</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" readonly>{{$income->description}}</textarea>
        </div>


        <a href="{{url()->previous()}}" class="btn btn-primary" type="submit">back</a>
      </form>

    </div>
    </div> 
  </div>
</div>