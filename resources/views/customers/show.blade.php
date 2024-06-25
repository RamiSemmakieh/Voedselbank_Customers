<!-- resources/views/customers/show.blade.php -->
<x-app-layout>
    <div class="mt-16 max-w-2xl mx-auto p-6 bg-gray-800 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-white mb-4">{{ $customer->name }}</h1>

        <div class="space-y-6">
            <div>
                <label class="block text-sm font-medium text-gray-400">Email:</label>
                <p class="mt-1 text-white">{{ $customer->email }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-400">Phone:</label>
                <p class="mt-1 text-white">{{ $customer->phone }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-400">Number of Adults:</label>
                <p class="mt-1 text-white">{{ $customer->number_of_adults }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-400">Number of Children:</label>
                <p class="mt-1 text-white">{{ $customer->number_of_children }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-400">Number of Babies:</label>
                <p class="mt-1 text-white">{{ $customer->number_of_babies }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-400">Street Name:</label>
                <p class="mt-1 text-white">{{ $customer->street_name }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-400">House Number:</label>
                <p class="mt-1 text-white">{{ $customer->house_number }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-400">Postal Code:</label>
                <p class="mt-1 text-white">{{ $customer->postal_code }}</p>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-400">City:</label>
                <p class="mt-1 text-white">{{ $customer->city }}</p>
            </div>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('customers.index') }}" class="px-4 py-2 bg-gray-600 text-white font-semibold rounded-md shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Back</a>
            <a href="{{ route('customers.edit', $customer->id) }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Edit</a>
        </div>
    </div>
</x-app-layout>