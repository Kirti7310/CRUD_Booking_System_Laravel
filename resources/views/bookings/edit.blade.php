<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Booking') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4">
        <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 p-6 rounded shadow">
            <form action="{{ route('bookings.edit', $booking->id) }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="customer_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Customer Name</label>
                    <input type="text" name="customer_name" class="form-input mt-1 block w-full rounded" value="{{ $booking->customer_name }}">
                </div>

                <div class="mb-4">
                    <label for="email" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Email</label>
                    <input type="text" name="email" class="form-input mt-1 block w-full rounded" value="{{ $booking->email }}">
                </div>

                <div class="mb-4">
                    <label for="phone" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Phone</label>
                    <input type="text" name="phone" class="form-input mt-1 block w-full rounded" value="{{ $booking->phone }}">
                </div>

                <div class="mb-4">
                    <label for="booking_date" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Booking Date</label>
                    <input type="date" name="booking_date" class="form-input mt-1 block w-full rounded" value="{{ $booking->booking_date }}">
                </div>

                <div class="mb-4">
                    <label for="notes" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Notes</label>
                    <input type="text" name="notes" class="form-input mt-1 block w-full rounded" value="{{ $booking->notes }}">
                </div>

                <div class="flex items-center gap-4">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700">
                        Update Booking
                    </button>
                    <a href="{{ route('bookings.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded hover:bg-gray-700">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
