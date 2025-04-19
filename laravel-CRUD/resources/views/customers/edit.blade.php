@extends('layouts.app') 
 
@section('content') 
<div class="container"> 
    <h2>Edit Customer</h2> 
    <form action="{{ route('customers.update',$customer->id) }}" method="POST"> 
        @csrf 
        @method('PUT') 
        <div class="form-group"> 
            <label for="name">Name:</label> 
            <input type="text" class="form-control" id="name" name="name" value="{{ $customer->name }}" required> 
        </div> 
        <div class="form-group"> 
            <label for="email">Email:</label> 
            <input type="email" class="form-control" id="email" name="email" value="{{ $customer->email }}" required> 
        </div> 
        <div class="form-group"> 
            <label for="phone">Phone:</label> 
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $customer->phone }}"> 
        </div> 
        <button type="submit" class="btn btn-primary">Update</button> 
    </form> 
</div> 
@endsection