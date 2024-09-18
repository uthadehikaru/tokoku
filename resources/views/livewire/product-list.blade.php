<div>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
        <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>
            <div class="flex flex-wrap -m-4">
                @foreach ($products as $product)
                <x-product-card :product="$product" />
                @endforeach
            </div>
            {{ $products->links() }}
        </div>
    </section>
</div>
