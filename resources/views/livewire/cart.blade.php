<div>
    <div class="container mx-auto mt-10">
        <div class="flex flex-col md:flex-row shadow-md my-10">
            <div class="w-full md:w-3/4 bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Keranjang Belanja</h1>
                    <h2 class="font-semibold text-2xl">{{ count(session('cart', [])) }} Items</h2>
                </div>
                <div class="flex mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detail Produk</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Kuantitas</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Harga</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5">Total</h3>
                </div>
                @forelse(session('cart', []) as $id => $details)
                    <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                        <div class="flex w-2/5">
                            <div class="w-20">
                                <a href="{{ route('product.detail', $details['slug']) }}">
                                    <img class="h-20 object-contain" src="{{ $details['image']?asset('storage/' . $details['image']) : asset('no photo.jpg') }}" alt="{{ $details['name'] }}">
                                </a>
                            </div>
                            <div class="flex flex-col justify-between ml-4 flex-grow">
                                <a href="{{ route('product.detail', $details['slug']) }}" class="font-bold text-primary text-sm">{{ $details['name'] }}</a>
                                <button class="font-semibold hover:text-red-500 text-error text-xs" onclick="confirmDelete({{ $id }})">Hapus</button>
                            </div>
                        </div>
                        <div class="flex justify-center w-1/5">
                            <input class="mx-2 border text-center w-8" type="text" wire:model.live.debounce.500ms="cart.{{ $id }}.quantity" value="{{ $details['quantity'] }}">
                        </div>
                        <span class="text-center w-1/5 font-semibold text-sm">Rp {{ number_format($details['price'], 0, ',', '.') }}</span>
                        <span class="text-center w-1/5 font-semibold text-sm">Rp {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }}</span>
                    </div>
                @empty
                    <a href="{{ route('product.list') }}" class="text-center text-primary font-semibold">tambahkan produk ke keranjang</a>
                @endforelse
            </div>
            <div id="summary" class="w-full md:w-1/4 px-8 py-10">
                <h1 class="font-semibold text-2xl border-b pb-8">Ringkasan Pesanan</h1>
                <div class="flex justify-between mt-10 mb-5">
                    <span class="font-semibold text-sm uppercase">Items {{ count(session('cart', [])) }}</span>
                    <span class="font-semibold text-sm">
                        Rp {{ number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart', []))), 0, ',', '.') }}
                    </span>
                </div>
                <div class="border-t mt-8">
                    <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                        <span>Total</span>
                        <span>
                            Rp {{ number_format(array_sum(array_map(function($item) { return $item['price'] * $item['quantity']; }, session('cart', []))), 0, ',', '.') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
            
        <div class="flex justify-end mt-10 mb-5">
                <a href="{{ route('checkout') }}" class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase border rounded-md px-4 mr-3">Proses Checkout</a>
                @if(count(session('cart', [])) > 0)
                    <button wire:click="clearCart" class="bg-yellow-500 font-semibold hover:bg-yellow-600 py-3 text-sm text-white uppercase border rounded-md px-4">Kosongkan Keranjang</button>
                @endif
            </div>
    </div>
</div>
@push('scripts')
    <script>
        function confirmDelete(id) {
            Swal.fire({ 
                title: 'Apakah Anda yakin?',
                text: "Produk akan dihapus dari keranjang",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('removeFromCart', { id : id });
                }
            });
        }
    </script>
@endpush