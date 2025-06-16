<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Booking System') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 max-w-7xl mx-auto">
        <a href="{{ route('bookings.create') }}"
           class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4">
            Create New Record
        </a>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white dark:bg-gray-800 rounded shadow">
            <table class="min-w-full text-sm text-left text-gray-900 dark:text-gray-100">
                <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300">
                    <tr>
                        <th class="px-4 py-2">Customer Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Phone</th>
                        <th class="px-4 py-2">Booking Date</th>
                        <th class="px-4 py-2">Comments</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $book)
                        <tr class="border-t dark:border-gray-700">
                            <td class="px-4 py-2">{{ $book->customer_name }}</td>
                            <td class="px-4 py-2">{{ $book->email }}</td>
                            <td class="px-4 py-2">{{ $book->phone }}</td>
                            <td class="px-4 py-2">{{ $book->booking_date }}</td>
                            <td class="px-4 py-2">{{ $book->notes }}</td>
                            <td class="px-4 py-2 space-x-2">
                                <a href="{{ route('bookings.edit',$book->id) }}"
                                   class="inline-block bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm">
                                    Edit
                                </a>
                                <form action="{{ route('bookings.delete', $book->id) }}"
                                      method="POST" class="inline"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if($bookings->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center px-4 py-2 text-gray-500">No bookings found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>

    

 {{-- <x-slot name="bodymain">
        <a href="{{ route('dashboard') }}"
           class="inline-block bg-yellow-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4">
            Home
        </a>
    </x-slot> --}}

</x-app-layout>
