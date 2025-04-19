@extends('layouts.app') 
 
@section('content') 
    <div class="container"> 
        <h2>Customer List</h2> 
        <a href="{{ route('customers.create') }}" class="btn btn-primary">Create New Customer</a> 
        <table class="table table-bordered mt-3"> 
            <thead> 
                <tr> 
                    <th>No.</th> 
                    <th>Id Pembeli</th> 
                    <th>Name</th> 
                    <th>Email</th> 
                    <th>Phone</th> 
                    <th>Action</th> 
                </tr> 
            </thead> 
            <tbody> 
            @foreach ($customers as $index => $customer) 
                    <tr> 
                        <td>{{ $index + 1 }}</td> 
                        <td>{{ $customer->id }}</td> 
                        <td>{{ $customer->name }}</td> 
                        <td>{{ $customer->email }}</td> 
                        <td>{{ $customer->phone }}</td> 
                        <td> 
                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST"> 
                                <a class="btn btn-info" href="{{ route('customers.show', $customer->id) }}">Show</a> 
                                <a class="btn btn-primary" href="{{ route('customers.edit', $customer->id) }}">Edit</a> 
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