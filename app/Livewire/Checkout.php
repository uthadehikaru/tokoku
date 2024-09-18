<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Checkout extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;

    public function mount()
    {
        if(!session('cart', [])){
            return redirect()->route('cart');
        }
        $user = Auth::user();
        if($user){
            $this->name = $user->name;
            $this->email = $user->email;
            $this->phone = $user->phone;
            $this->address = $user->address;
        }
    }

    public function placeOrder()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        /** @var User $user */
        $user = auth()->user();
        if(!$user){
            $user = User::firstOrCreate([
                'email' => $this->email,
            ],[
                'name' => $this->name,
                'phone' => $this->phone,
                'address' => $this->address,
                'password' => Hash::make($this->phone),
            ]);

            Auth::login($user);
        }

        $user->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'address' => $this->address,
        ]);

        $order = Order::create([
            'order_no' => 'INV/' . date('YmdHis'),
            'user_id' => $user->id,
            'customer_name' => $this->name,
            'customer_email' => $this->email,
            'customer_phone' => $this->phone,
            'customer_address' => $this->address,
            'items' => json_encode(session('cart', [])),
            'total_price' => array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart', []))),
        ]);

        session()->forget('cart');

        return redirect()->route('order-summary', $order->id);
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
