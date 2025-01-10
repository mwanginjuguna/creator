<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use App\Models\QuoteRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderRequestForm extends Form
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';
    public string $companyName = '';
    public string $phoneNumber = '';
    public mixed $product = [];
    public string $message = '';
    public bool $acceptedTnc = true;

    public function saveOrder(): bool
    {

        $or = Order::create([
            'customer_name' => $this->name,
            'email' => $this->email,
            'company_name' => $this->companyName,
            'phone_number' => $this->phoneNumber,
            'product_id' => $this->product['productId'],
            'product_name' => $this->product['name'],
            'product_description' => $this->product['description'],
            'hours' => $this->product['hours'],
            'features' => json_encode($this->product['features']),
            'extras' => json_encode($this->product['extras']),
            'price' => $this->product['price'],
            'message' => $this->message,
            'accepted_terms' => $this->acceptedTnc
        ]);

        $this->reset();

        return true;
    }

    /**
     * Handle user registration request.
     */
    public function registerUser(): User
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Password::default()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered($user = User::create($validated)));

        Auth::login($user);

        return $user;
    }
}
