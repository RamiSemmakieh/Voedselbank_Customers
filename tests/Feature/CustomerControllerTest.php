<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Customer;
use App\Models\User;

class CustomerControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function authenticate()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }

    public function test_it_can_store_a_customer()
    {
        $this->authenticate();

        $data = [
            'name' => 'Test Name',
            'email' => 'test@example.com',
            'phone' => '0612345678',
            'number_of_adults' => 2,
            'number_of_children' => 1,
            'number_of_babies' => 0,
            'street_name' => 'Test Street',
            'house_number' => 123,
            'postal_code' => '1234AB',
            'city' => 'Test City',
        ];

        $response = $this->post(route('customers.store'), $data);

        $response->assertRedirect(route('customers.index'));
        $this->assertDatabaseHas('customers', $data);
    }


    public function test_it_can_display_all_customers()
    {
        $this->authenticate();

        $customers = Customer::factory()->count(3)->create();

        $response = $this->get(route('customers.index'));

        $response->assertStatus(200);
        $response->assertViewHas('customers', function ($viewCustomers) use ($customers) {
            return $viewCustomers->count() === $customers->count();
        });
    }

    public function test_it_can_display_a_single_customer()
    {
        $this->authenticate();

        $customer = Customer::factory()->create();

        $response = $this->get(route('customers.show', $customer->id));

        $response->assertStatus(200);
        $response->assertViewHas('customer', $customer);
    }

    public function test_it_can_update_a_customer()
    {
        $this->authenticate();

        $customer = Customer::factory()->create();

        $newData = [
            'name' => 'Updated Name',
            'email' => 'rosalyn.koepp@example.org',
            'phone' => '445.585.3598',
            'number_of_adults' => 3,
            'number_of_children' => 2,
            'number_of_babies' => 1,
            'street_name' => 'Updated Street',
            'house_number' => 456,
            'postal_code' => '5678CD',
            'city' => 'Updated City',
        ];

        $response = $this->patch(route('customers.update', $customer->id), $newData);

        $response->assertRedirect(route('customers.index'));
        $this->assertDatabaseHas('customers', $newData);
    }

    public function test_it_can_delete_a_customer()
    {
        $this->authenticate();

        $customer = Customer::factory()->create();

        $response = $this->delete(route('customers.destroy', $customer->id));

        $response->assertRedirect(route('customers.index'));
        $this->assertDatabaseMissing('customers', ['id' => $customer->id]);
    }
}
