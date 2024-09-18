@extends('layouts.web')
@section('content')
<!-- Mulai Tentang Kami -->
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="Tentang Kami" src="{{ asset('tokoku.png') }}">
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Tentang Toko Online Kami</h1>
            <p class="mb-8 leading-relaxed">Selamat datang di Toko Online kami! Kami adalah platform e-commerce yang berkomitmen untuk menyediakan produk berkualitas tinggi dengan harga terjangkau. Didirikan pada tahun 2020, kami telah melayani ribuan pelanggan puas di seluruh Indonesia.</p>
            <p class="mb-8 leading-relaxed">Misi kami adalah untuk memberikan pengalaman berbelanja online yang mudah, aman, dan menyenangkan bagi semua pelanggan kami.</p>
        </div>
    </div>
</section>

<!-- Fitur Unggulan -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h2 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Fitur Unggulan Kami</h2>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-yellow-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-gray-900 text-lg title-font font-medium">Pengiriman Cepat</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Kami menjamin pengiriman cepat ke seluruh Indonesia dengan mitra logistik terpercaya.</p>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-yellow-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-gray-900 text-lg title-font font-medium">Layanan Pelanggan 24/7</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Tim layanan pelanggan kami siap membantu Anda 24 jam sehari, 7 hari seminggu.</p>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-yellow-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <circle cx="6" cy="6" r="3"></circle>
                                <circle cx="6" cy="18" r="3"></circle>
                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                            </svg>
                        </div>
                        <h2 class="text-gray-900 text-lg title-font font-medium">Jaminan Kualitas</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Kami menjamin kualitas semua produk kami dan menawarkan kebijakan pengembalian yang mudah.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Informasi Toko -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
            <h2 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 mb-4">Informasi Toko</h2>
            <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto text-gray-500s">Berikut adalah informasi penting tentang toko online kami.</p>
        </div>
        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
            <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
                    </svg>
                    <span class="title-font font-medium">Jl. Raya Utama No. 123, Jakarta Pusat</span>
                </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="title-font font-medium">Telepon: (021) 123-4567</span>
                </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span class="title-font font-medium">Email: info@tokoku.com</span>
                </div>
            </div>
            <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-yellow-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                        <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="title-font font-medium">Jam Buka: Senin-Sabtu, 09.00-21.00 WIB</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
