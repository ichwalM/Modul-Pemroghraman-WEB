@extends('layouts.app') 
 
@section('content') 
<div class="container"> 
    <h2>Show Order</h2> 
    <div class="card"> 
        <div class="card-body"> 
            <h5 class="card-title">Customer: {{ $order->customer->name }}</h5> 
            <p class="card-text">Menu: {{ $order->menu->name }}</p> 
            <p class="card-text">Quantity: {{ $order->quantity }}</p> 
            <p class="card-text">Total Price: {{ $order->total_price }}</p> 
            <a href="{{ route('orders.edit',$order->id) }}" class="btn btn-primary">Edit</a> 
            <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a> 
        </div> 
    </div> 
</div> 
@endsection 