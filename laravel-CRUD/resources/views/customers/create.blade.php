@extends('layouts.app') 
 
@section('content') 
<div class="container"> 
    <h2>Create New Customer</h2> 
    <form action="{{ route('customers.store') }}" method="POST"> 
    @csrf 
        <div class="form-group"> 
            <label for="name">Name:</label> 
            <input type="text" class="form-control" id="name" name="name" required> 
        </div> 
        <div class="form-group"> 
            <label for="email">Email:</label> 
            <input type="email" class="form-control" id="email" name="email" required> 
        </div> 
        <div class="form-group"> 
            <label for="phone">Phone:</label> 
            <input type="text" class="form-control" id="phone" name="phone"> 
        </div> 
        <button type="submit" class="btn btn-primary">Submit</button> 
    </form> 
</div> 
@endsection 