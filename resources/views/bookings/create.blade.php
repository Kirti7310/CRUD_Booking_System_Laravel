<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Booking') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4">
        <div class="max-w-4xl mx-auto bg-white dark:bg-gray-800 p-6 rounded shadow">
            <form action="{{ route('bookings.store') }}" method="POST">
                @csrf

                @include('bookings.bform')

                <div class="mt-4 flex gap-3">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded hover:bg-blue-700">
                        Add Booking
                    </button>
                    <a href="{{ route('bookings.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm font-medium rounded hover:bg-gray-700">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
