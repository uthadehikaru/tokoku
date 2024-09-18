<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public Product $product;
    public $relatedProducts = [];

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->relatedProducts = Product::latest()->where('id', '!=', $product->id)->take(4)->get();
    }

    public function addToCart()
    {
        // Get the current cart from the session
        $cart = session()->get('cart', []);

        // Check if the product is already in the cart
        if(isset($cart[$this->product->id])) {
            // If it is, increment the quantity
            $cart[$this->product->id]['quantity']++;
        } else {
            // If it's not, add it to the cart
            $cart[$this->product->id] = [
                "name" => $this->product->name,
                "slug" => $this->product->slug,
                "quantity" => 1,
                "price" => $this->product->price,
                "image" => $this->product->image
            ];
        }

        // Save the updated cart back to the session
        session()->put('cart', $cart);

        // Optionally, you can add a success message
        $this->dispatch('message', detail: 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
