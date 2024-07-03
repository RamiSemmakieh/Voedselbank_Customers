<x-app-layout>
    <div class="mt-16 max-w-2xl mx-auto p-6 bg-gray-800 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-white mb-4">Edit Customer</h1>

        @if ($errors->any())
        <div class="mb-4 p-4 bg-red-600 text-white rounded">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('customers.update', $customer->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')
            <div>
                <label class="block text-sm font-medium text-white">Name:</label>
                <input type="text" name="name" value="{{ old('name', $customer->name) }}" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div>
                <label class="block text-sm font-medium text-white">Email:</label>
                <input type="email" name="email" value="{{ old('email', $customer->email) }}" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div>
                <label class="block text-sm font-medium text-white">Phone:</label>
                <input type="text" name="phone" value="{{ old('phone', $customer->phone) }}" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div>
                <label class="block text-sm font-medium text-white">Number of Adults:</label>
                <input type="number" name="number_of_adults" min="0" value="{{ old('number_of_adults', $customer->number_of_adults) }}" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div>
                <label class="block text-sm font-medium text-white">Number of Children:</label>
                <input type="number" name="number_of_children" min="0" value="{{ old('number_of_children', $customer->number_of_children) }}" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div>
                <label class="block text-sm font-medium text-white">Number of Babies:</label>
                <input type="number" name="number_of_babies" min="0" value="{{ old('number_of_babies', $customer->number_of_babies) }}" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div>
                <label class="block text-sm font-medium text-white">Street Name:</label>
                <input type="text" name="street_name" value="{{ old('street_name', $customer->street_name) }}" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div>
                <label class="block text-sm font-medium text-white">House Number:</label>
                <input type="text" name="house_number" value="{{ old('house_number', $customer->house_number) }}" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div>
                <label class="block text-sm font-medium text-white">Postal Code:</label>
                <input type="text" name="postal_code" value="{{ old('postal_code', $customer->postal_code) }}" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div>
                <label class="block text-sm font-medium text-white">City:</label>
                <input type="text" name="city" value="{{ old('city', $customer->city) }}" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div class="flex justify-between">
                <a href="{{ route('customers.index') }}" class="px-4 py-2 bg-gray-600 text-white font-semibold rounded-md shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">Cancel</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Update</button>
            </div>
        </form>
    </div>
</x-app-layout>