<div class="grid gap-4">
    <div>
        <label for="customer_name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Customer Name</label>
        <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name', $booking->customer_name ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600">
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Customer Email</label>
        <input type="text" name="email" id="email" value="{{ old('email', $booking->email ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600">
    </div>

    <div>
        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Mobile Number</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone', $booking->phone ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600">
    </div>

    <div>
        <label for="booking_date" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Booking Date</label>
        <input type="date" name="booking_date" id="booking_date" value="{{ old('booking_date', $booking->booking_date ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600">
    </div>

    <div>
        <label for="notes" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Notes</label>
        <input type="text" name="notes" id="notes" value="{{ old('notes', $booking->notes ?? '') }}"
               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600">
    </div>
</div>
