@extends('layouts.web')
@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-4">{{ $order->order_no }}</h1>
    <div class="w-full bg-white px-10 py-10 mb-6">
        <h2 class="font-semibold text-2xl border-b pb-4 mb-4">Informasi Pelanggan</h2>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="font-semibold">Nama:</p>
                    <p>{{ $order->customer_name }}</p>
                </div>
                <div>
                    <p class="font-semibold">Telepon:</p>
                    <p>{{ $order->customer_phone }}</p>
                </div>
                <div>
                    <p class="font-semibold">Email:</p>
                    <p>{{ $order->customer_email }}</p>
                </div>
                <div>
                    <p class="font-semibold">Alamat:</p>
                    <p>{{ $order->customer_address }}</p>
                </div>
            </div>
            <div class="mt-4">
                <p class="font-semibold">Status Pesanan:</p>
                <p class="{{ match($order->status) {
                    'pending' => 'text-yellow-600',
                    'completed' => 'text-green-600',
                    'cancelled' => 'text-red-600',
                    default => 'text-gray-600'
                } }} font-bold">
                    {{ __($order->status) }}
                </p>
            </div>
        </div>
    <div class="flex shadow-md my-10">
        <div class="w-full bg-white px-10 py-10">
            <div class="flex justify-between border-b pb-8">
                <h1 class="font-semibold text-2xl">Ringkasan Pesanan</h1>
                <h2 class="font-semibold text-2xl">{{ count(json_decode($order->items, true)) }} Item</h2>
            </div>
            <div class="flex mt-10 mb-5">
                <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detail Produk</h3>
                <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Kuantitas</h3>
                <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Harga</h3>
                <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Total</h3>
            </div>
            @foreach(json_decode($order->items, true) as $item)
                <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                    <div class="flex w-2/5">
                        <div class="w-20">
                            <img class="h-24 object-contain" src="{{ $item['image'] ? asset('storage/' . $item['image']) : asset('no photo.jpg') }}" alt="{{ $item['name'] }}">
                        </div>
                        <div class="flex flex-col justify-between ml-4 flex-grow">
                            <span class="font-bold text-sm">{{ $item['name'] }}</span>
                        </div>
                    </div>
                    <div class="flex justify-center w-1/5">
                        <span class="text-center w-1/5 font-semibold text-sm">{{ $item['quantity'] }}</span>
                    </div>
                    <span class="text-center w-1/5 font-semibold text-sm">Rp {{ number_format($item['price'], 0, ',', '.') }}</span>
                    <span class="text-center w-1/5 font-semibold text-sm">Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</span>
                </div>
            @endforeach
        </div>
    </div>
    <div class="w-full bg-white px-10 py-10 mb-6">
        <div id="summary" class="w-full px-8 py-10">
            <h1 class="font-semibold text-2xl border-b pb-8">Ringkasan Biaya</h1>
            <div class="flex justify-between mt-10 mb-5">
                <span class="font-semibold text-sm uppercase">Total Item</span>
                <span class="font-semibold text-sm">{{ count(json_decode($order->items, true)) }}</span>
            </div>
            <div class="flex justify-between mt-10 mb-5">
                <span class="font-semibold text-sm uppercase">Subtotal</span>
                <span class="font-semibold text-sm">Rp {{ number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, json_decode($order->items, true))), 0, ',', '.') }}</span>
            </div>
            <div class="border-t mt-8">
                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                    <span>Total Biaya</span>
                    <span>Rp {{ number_format($order->total_price, 0, ',', '.') }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
