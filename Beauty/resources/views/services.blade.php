@extends('layouts.app')

@section('content')
  
    <table class="service_table">
        <thead>
            <tr>
               
                <th>Service Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @forelse($services as $key => $service)
                <tr class="service_table">
                    <td>{{ $service->service_name }}</td>
                    <td>{{ $service->service_description}}</td>
                    <td>{{ $service->service_price}}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="4">No services found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <h1>Add New Service</h1>
    <form method="POST" action="{{ route('services.store') }}">
        @csrf
        <div class="form-group">
            <label for="service_name">Name:</label>
            <input type="text" class="form-control" id="service_name" name="service_name" required>
        </div>
        <div class="form-group">
            <label for="service_description">Description:</label>
            <input type="text" class="form-control" id="service_description" name="service_description" required>
        </div>
        <div class="form-group">
            <label for="service_price">Price:</label>
            <input type="double" class="form-control" id="service_price" name="service_price" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Service</button>
    </form>
@endsection
