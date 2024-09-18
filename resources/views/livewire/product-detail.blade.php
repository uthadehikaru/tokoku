<div>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-4 mx-auto">
            <nav class="flex mb-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-yellow-600">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                            Home
                        </a>
                    </li>
                    <li class="inline-flex items-center">
                        <a href="{{ route('product.list') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-yellow-600">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            Product
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ $product->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="{{ $product->name }}" class="lg:w-1/2 w-full lg:h-auto h-64 object-contain object-center rounded"
                    src="{{ $product->image ? asset('storage/' . $product->image) : asset('no photo.jpg') }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>
                    <p class="leading-relaxed">{{ $product->description }}</p>
                    <div class="flex mt-4">
                        <span class="title-font font-medium text-2xl text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <button 
                            wire:click="addToCart"
                            class="flex ml-auto text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Tambah ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="text-2xl font-bold mb-4">Produk Terkait</h1>
            <div class="flex flex-wrap -m-4">
                @foreach ($relatedProducts as $relatedProduct)
                    <x-product-card :product="$relatedProduct" />
                @endforeach
            </div>
        </div>
    </section>
</div>
