@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Add New Booking</h2>

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf

        @include('bookings.bform')

        <button type="submit" class="btn btn-primary" >Add Booking</button>
        <a href="{{ route('bookings.index') }}" class="btn btn-secondary">Cancel</a> 



    </form>




</div>