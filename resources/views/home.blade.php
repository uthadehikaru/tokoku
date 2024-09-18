@extends('layouts.web')
@section('content')
<!-- mulai hero -->
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="{{ asset('tokoku.png') }}">
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Selamat Datang di Toko Online Kami</h1>
            <p class="mb-8 leading-relaxed">Kami menyediakan berbagai macam produk berkualitas tinggi dengan harga terjangkau. Dari fashion hingga elektronik, temukan semua kebutuhan Anda di sini.</p>
            <div class="flex justify-center">
                <a href="{{ route('product.list') }}" class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Belanja Sekarang</a>
                <a href="{{ route('about') }}" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Tentang Kami</a>
            </div>
        </div>
    </div>
</section>
<!-- akhir hero -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-5 mx-auto">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Produk Terbaru</h2>
        <div class="flex flex-wrap -m-4">
            @foreach($products as $product)
            <x-product-card :product="$product" />
            @endforeach
        </div>
    </div>
</section>
<!-- mulai blog -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-10 mx-auto">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Artikel Terbaru</h2>
        <div class="flex flex-wrap -m-4">
            @foreach($articles as $article)
            <x-article-card :article="$article" />
            @endforeach
        </div>
    </div>
</section>
<!-- akhir blog -->
<!-- mulai kontak -->
<section class="text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=monumen%20nasional&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
        <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
            @if(config('app.whatsapp_number'))
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Umpan Balik</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Beri tahu kami pendapat Anda tentang layanan kami</p>    
            <a href="https://wa.me/{{ config('app.whatsapp_number') }}" class="text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Whatsapp</a>
            
            <p class="text-xs text-gray-500 mt-3">Kami menghargai setiap masukan dari Anda untuk meningkatkan layanan kami.</p>
            @else
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">{{ config('app.name') }}</h2>
            <p class="leading-relaxed mb-5 text-gray-600">terima kasih telah mengunjungi website kami</p>    
            
            @endif
        </div>
    </div>
</section>
<!-- akhir kontak -->
@endsection
