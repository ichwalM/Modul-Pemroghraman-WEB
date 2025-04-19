@extends('layouts.app') 
 
@section('content') 
<div class="container"> 
    <h2>Edit Order</h2> 
    <form action="{{ route('orders.update',$order->id) }}" method="POST"> 
        @csrf 
        @method('PUT') 
        <div class="form-group"> <label for="customer_id">Customer:</label> 
            <select class="form-control" id="customer_id"name="customer_id" required> 
                @foreach ($customers as $customer) 
                <option value="{{ $customer->id }}" {{ $customer->id == $order->customer_id ? 'selected' : '' }}>{{ $customer->name }}</option> 
                @endforeach 
            </select> 
        </div> 
        <div class="form-group"> 
            <label for="menu_id">Menu:</label>
            <select class="form-control" id="menu_id" name="menu_id" required> 
                @foreach ($menus as $menu) 
                <option value="{{ $menu->id }}" {{ $menu->id == $order->menu_id ? 'selected' : '' }}>{{ $menu->name }}</option> 
                @endforeach 
            </select> 
        </div> 
        <div class="form-group"> 
            <label for="quantity">Quantity:</label> 
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $order->quantity }}" required> 
        </div> 
        <div class="form-group"> 
            <label for="total_price">Total Price:</label> 
            <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" value="{{ $order->total_price }}" required> 
        </div> 
        <button type="submit" class="btn btn-primary">Update</button> 
    </form> 
</div> 
@endsection