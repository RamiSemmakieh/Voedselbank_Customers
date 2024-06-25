<!-- resources/views/customers/index.blade.php -->
<x-app-layout>
    <div class="mt-16 max-w-6xl mx-auto p-6 bg-gray-800 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-white mb-4">Customers List</h1>

        <table class="min-w-full bg-gray-700 rounded-md">
            <thead>
                <tr>
                    <th class="text-left py-3 px-4 text-white">Name</th>
                    <th class="text-left py-3 px-4 text-white">Email</th>
                    <th class="text-left py-3 px-4 text-white">Phone</th>
                    <th class="text-left py-3 px-4 text-white">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr class="bg-gray-800 border-b border-gray-700">
                    <td class="py-3 px-4 text-white">{{ $customer->name }}</td>
                    <td class="py-3 px-4 text-white">{{ $customer->email }}</td>
                    <td class="py-3 px-4 text-white">{{ $customer->phone }}</td>
                    <td class="py-3 px-4 text-white">
                        <a href="{{ route('customers.show', $customer->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="ml-2 text-yellow-500 hover:text-yellow-700">Edit</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="ml-2 text-red-500 hover:text-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>