@extends('layouts.app')

@section('content')


<div class="container mt-4">
    <h2> Booking System</h2>

    <a href="{{ route('bookings.create') }}" class="btn btn-primary mb-3">Create New Record</a>

    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                 <th>Customer Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Booking Date</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $book)
            <tr>
                <td>{{ $book->customer_name}}</td>
                <td>{{ $book->email }}</td>
                <td>{{ $book->phone }}</td>
                <td>{{ $book->booking_date }}</td>
                <td>

                    <a href="{{ route('bookings.edit',$book->id) }}" class="btn btn-warning btn-sm">View</a>
                        {{-- <a href="{{ route('bookings.show', $book->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('bookings.edit', $book->id) }}" class="btn btn-warning btn-sm">Edit</a> --}}
                        {{-- <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form> --}}
                    </td>
            </tr>
            @endforeach
        </tbody>

    </table>





</div>
@endsection