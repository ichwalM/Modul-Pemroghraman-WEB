@extends('layouts.app') 
 
@section('content') 
<div class="container"> 
    <h2>Show Customer</h2> 
    <div class="card"> 
        <div class="card-body"> 
            <h5 class="card-title">{{ $customer->name }}</h5> 
            <p class="card-text">Email: {{ $customer->email }}</p> 
            <p class="card-text">Phone: {{ $customer->phone }}</p> 
            <a href="{{ route('customers.edit',$customer->id) }}" class="btn btn-primary">Edit</a> 
            <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back</a> 
        </div> 
    </div> 
</div> 
@endsection 