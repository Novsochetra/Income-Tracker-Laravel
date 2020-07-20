{{-- @extends('dashboard.layout') --}}
{{-- @section('content') --}}
<section class="content">
    <a href="{{url('/categories')}}" class="btn btn-primary btn-sm btn-oval">
        <i class="fa fa-angle-left"> &nbsp; Back</i>
    </a>
    <hr>
    <div class="row">
     <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add Category</h1>
      <div>
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div><br />
        @endif
          <form method="post" action="{{url('categories')}}">
              @csrf
              <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label for="first_name">Category Name:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
    
                <div class="form-group col-md-6">
                    <label for="last_name">Color:</label>
                    <input type="text" class="form-control" name="color"/>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label for="email">Description:</label>
                    <input type="text" class="form-control" name="description"/>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary-outline">Add Category</button>          
              </div>                  
          </form>
      </div>
    </div>
    </div>
    </section>
{{-- @endsection --}}