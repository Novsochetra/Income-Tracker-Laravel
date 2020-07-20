@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="row">
                    <div class="col-sm-10">
                        {{ $incomes->links() }}
                    </div>
                    <div class="col-sm-1">
                        <a class="btn btn-outline-success" href="/incomes/create">Add</a>
                    </div>
                </div>
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Description</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($incomes as $income)
                        <tr>
                            <td scope="row">{{$income -> id}}</td>
                            <td>{{$income -> name}}</td>
                            <td>{{$income -> amount}}</td>
                            <td>{{$income -> description}}</td>
                            <td>
                                <a href="/incomes/{{$income->id}}" class="btn btn-outline-primary">Show</a>
                                <a href="/incomes/{{$income->id}}/edit" class="btn btn-outline-primary">Edit</a>
                                <form action="/incomes/{{$income->id}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Delete</button> 
                                </form>
                            </td>
                        </tr>
                   @endforeach 
                  </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-12">
                        {{ $incomes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection