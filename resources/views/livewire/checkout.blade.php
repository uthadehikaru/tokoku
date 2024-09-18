<div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Checkout</h1>
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Oops!</strong>
                <span class="block sm:inline">Silakan perbaiki kesalahan berikut:</span>
                <ul class="list-disc list-inside mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Informasi Pelanggan</h2>
                <form wire:submit.prevent="placeOrder">
                    @auth
                    <ul class="list-none py-4">
                        <li>Nama: {{ auth()->user()->name }}</li>
                        <li>Email: {{ auth()->user()->email }}</li>
                        <li>Nomor Telepon: {{ auth()->user()->phone }}</li>
                        <li>Alamat: {{ auth()->user()->address }}</li>
                    </ul>
                    @else
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="name" wire:model="name" required placeholder="Masukkan nama Anda" class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" wire:model="email" required placeholder="Masukkan email Anda" class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                        <input type="tel" id="phone" wire:model="phone" required placeholder="Masukkan nomor telepon Anda" class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-3 py-2">
                    </div>
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <textarea id="address" wire:model="address" rows="3" required placeholder="Masukkan alamat lengkap Anda" class="mt-1 block w-full rounded-md border border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 px-3 py-2"></textarea>
                    </div>
                    @endauth
                    <button wire:loading.attr="disabled" wire:loading.class="opacity-50 cursor-not-allowed" type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Buat Pesanan</button>
                </form>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold mb-4">Ringkasan Pesanan</h2>
                @foreach(session('cart', []) as $id => $details)
                    <div class="flex justify-between items-center mb-2">
                        <span>{{ $details['name'] }} (x{{ $details['quantity'] }})</span>
                        <span>Rp {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</span>
                    </div>
                @endforeach
                <div class="border-t pt-4 mt-4">
                    <div class="flex justify-between items-center font-semibold">
                        <span>Total</span>
                        <span>Rp {{ number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart', []))), 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
                            
</div>
