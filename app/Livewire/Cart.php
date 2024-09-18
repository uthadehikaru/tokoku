<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    #[On('removeFromCart')]
    public function removeFromCart($id)
    {
        if(isset($this->cart[$id])) {
            unset($this->cart[$id]);
            session()->put('cart', $this->cart);
            $this->dispatch('message', detail: 'Produk berhasil dihapus dari keranjang!');
        }
    }

    public function clearCart()
    {
        session()->forget('cart');
        $this->dispatch('message', detail: 'Keranjang berhasil dikosongkan!');
    }

    public function updated($property, $value)
    {   
        $properties = explode('.', $property);
        $id = $properties[1] ?? 0;
        if(isset($this->cart[$id])) {
            $this->cart[$id]['quantity'] = $value;
            $this->cart[$id]['price'] = $this->cart[$id]['price'] * $value;
            session()->put('cart', $this->cart);
            $this->dispatch('message', detail: 'Keranjang berhasil diperbarui!');
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
