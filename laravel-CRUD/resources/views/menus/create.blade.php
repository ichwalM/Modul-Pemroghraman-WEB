
@extends('layouts.app') 
 
@section('content') 
<div class="container"> 
    <h2>Create New Menu</h2> 
    <form action="{{ route('menus.store') }}" method="POST"> 
        @csrf 
        <div class="form-group"> 
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required> 
        </div> 
        <div class="form-group"> 
            <label for="description">Description:</label> 
            <textarea class="form-control" id="description" name="description"></textarea> 
        </div> 
        <div class="form-group"> 
            <label for="price">Price:</label> 
            <input type="number" step="0.01" class="form-control" id="price" name="price" required> 
        </div> 
        <button type="submit" class="btn btn-primary">Submit</button> 
    </form> 
</div> 
@endsection 