@extends('layouts.app') 
 
@section('content') 
<div class="container"> 
    <h2>Edit Menu</h2> 
    <form action="{{ route('menus.update',$menu->id) }}"method="POST"> 
        @csrf 
        @method('PUT') 
        <div class="form-group"> 
            <label for="name">Name:</label> 
            <input type="text" class="form-control" id="name" name="name" value="{{ $menu->name }}" required> 
        </div> 
        <div class="form-group"> 
            <label for="description">Description:</label> 
            <textarea class="form-control" id="description" name="description">{{ $menu->description }}</textarea> 
        </div> 
        <div class="form-group"> 
            <label for="price">Price:</label> 
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $menu->price }}" required> 
        </div> 
        <button type="submit" class="btn btn-primary">Update</button> 
    </form> 
</div> 
@endsection 