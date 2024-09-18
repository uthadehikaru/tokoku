<div class="lg:w-1/4 md:w-1/2 p-4 w-full">
    <a href="{{ route('product.detail', $product->slug) }}" class="block relative h-48 rounded overflow-hidden">
        <img alt="{{ $product->name }}" class="object-contain w-full h-full block" src="{{ $product->image ? asset('storage/' . $product->image) : asset('no photo.jpg') }}">
    </a>
    <div class="mt-4">
        <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
        <p class="mt-1">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
    </div>
</div>