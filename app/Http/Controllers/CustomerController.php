<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'phone' => 'required|string|max:20|unique:customers',
            'number_of_adults' => 'required|integer',
            'number_of_children' => 'nullable|integer',
            'number_of_babies' => 'nullable|integer',
            'street_name' => 'required|string|max:50',
            'house_number' => 'required|integer',
            'postal_code' => 'required|string|max:10',
            'city' => 'required|string|max:50',
        ]);
        Customer::create($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Customer created successfully.');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers,email,' . $customer->id,
            'phone' => 'required|string|max:15|unique:customers,phone,' . $customer->id,
            'number_of_adults' => 'required|integer',
            'number_of_children' => 'nullable|integer',
            'number_of_babies' => 'nullable|integer',
            'street_name' => 'required|string|max:50',
            'house_number' => 'required|integer',
            'postal_code' => 'required|string|max:10',
            'city' => 'required|string|max:50',
        ]);

        $customer->update($request->all());

        return redirect()->route('customers.index')
            ->with('success', 'Customer updated successfully.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')
            ->with('success', 'Customer deleted successfully.');
    }
}
