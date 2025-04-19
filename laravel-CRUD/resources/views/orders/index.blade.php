@extends('layouts.app') 
 
@section('content') 
    <div class="container"> 
        <h2>Order List</h2> 
        <a href="{{ route('orders.create') }}" class="btn btn-primary">Create New Order</a> 
        <table class="table table-bordered mt-3"> 
            <thead> 
                <tr> 
                    <th>No.</th> 
                    <th>Customer</th> 
                    <th>Menu</th> 
                    <th>Quantity</th> 
                    <th>Total Price</th> 
                    <th>Action</th> 
                </tr> 
            </thead> 
            <tbody> 
                @foreach ($orders as $index => $order) 
                    <tr> 
                        <td>{{ $index + 1 }}</td> 
                        <td>{{ $order->customer_id }}</td> 
                        <td>{{ $order->menu_id }}</td> 
                        <td>{{ $order->quantity }}</td> 
                        <td>Rp. {{ number_format($order->total_price,0, ',', '.') }}</td> 
                        <td> 
                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST"> 
                                <a class="btn btn-info" href="{{ route('orders.show', $order->id) }}">Show</a> 
                                <a class="btn btn-primary" href="{{ route('orders.edit', $order->id) }}">Edit</a> 
                                @csrf 
                                @method('DELETE') 
                                <button type="submit" class="btn btn-danger">Delete</button> 
                            </form> 
                        </td> 
                    </tr> 
                @endforeach 
            </tbody> 
        </table> 
    </div> 
@endsection 