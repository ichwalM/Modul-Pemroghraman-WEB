@extends('layouts.app') 
 
@section('content') 
<div class="container"> 
    <h2>Show Menu</h2> 
    <div class="card"> 
        <div class="card-body"> 
            <h5 class="card-title">{{ $menu->name }}</h5> 
            <p class="card-text">{{ $menu->description }}</p> 
            <p class="card-text">Price: {{ $menu->price }}</p> 
            <a href="{{ route('menus.edit',$menu->id) }}" class="btn btn-primary">Edit</a> 
            <a href="{{ route('menus.index') }}" class="btn btn-secondary">Back</a> 
        </div> 
    </div> 
</div> 
@endsection 