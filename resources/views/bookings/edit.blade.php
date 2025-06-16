@extends('layouts.app')


@section('content')

<div class="container">
    <h2>Booking Edit</h2>


    <form action="{{ route('bookings.edit',$booking->id) }}" method="POST">
      @csrf

       <div class="mb-3">
            <label for="customer_name" class="form-label">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" value="{{ $booking->customer_name }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control" value="{{$booking->email}}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{$booking->phone}}">
        </div>

        <div class="mb-3">
            <label for="booking_date" class="form-label">Booking Date</label>
            <input type="date" name="booking_date" class="form-control" value="{{$booking->booking_date}}">
        </div>


        <div class="mb-3">
            <label for="notes" class="form-label">Notes</label>
            <input type="text" name="notes" class="form-control" value="{{$booking->notes}}">
        </div>

                <button type="submit" class="btn btn-primary">Update Booking</button>

        







 </form>
</div>
@endsection