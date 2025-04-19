@extends('layouts.app') 
 
@section('content') 
    <div class="container"> 
        <h2>Create New Order</h2> 
        <form action="{{ route('orders.store') }}" method="POST"> 
            @csrf 
            <div class="form-group"> 
                <label for="customer_id">Customer</label> 
                <select name="customer_id" class="form-control" required> 
                    @foreach ($customers as $customer) 
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option> 
                    @endforeach 
                </select> 
            </div> 
            <div class="form-group"> 
                <label for="menu_id">Menu</label> 
                <select name="menu_id" class="form-control" required> 
                    @foreach ($menus as $menu) 
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option> 
                    @endforeach 
                </select> 
            </div> 
            <div class="form-group"> 
                <label for="quantity">Quantity</label> 
                <input type="number" name="quantity" class="form-control" required> 
            </div> 
            <div class="form-group"> 
                <label for="total_price">Total Price</label> 
                <input type="number" step="0.01" name="total_price" class="form-control" required> 
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button> 
        </form> 
 
    </div> 
@endsection 