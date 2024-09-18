<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name' )}}</title>
        <link rel="icon" href="{{ asset('tokoku.png') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- DaisyUI CSS -->
        <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.6/dist/full.css" rel="stylesheet" type="text/css" />
        
        <!-- Tailwind CSS (required for DaisyUI) -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Sweetalert2 CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">
        @stack('styles')
    </head>
    <body>
        <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a href="{{ url('/') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="{{ asset('tokoku.png') }}" alt="Logo" class="w-10 h-10">
                <span class="ml-3 text-xl">{{ config('app.name' )}}</span>
                </a>
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a href="{{ route('product.list') }}" class="mr-5 hover:text-gray-900">Produk</a>
                    <a href="{{ route('cart') }}" class="mr-5 hover:text-gray-900 relative">
                        Keranjang
                        @if (count(session('cart', [])) > 0)
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs animate-pulse">
                            {{ count(session('cart', [])) }}
                        </span>
                        @endif
                    </a>
                    <a href="{{ route('article.list') }}" class="mr-5 hover:text-gray-900">Artikel</a>
                    <a href="{{ url('about') }}" class="mr-5 hover:text-gray-900">Tentang Kami</a>
                </nav>
                @guest
                <a href="{{ route('login') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Masuk
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </a>
                @endguest
                @auth
                @if (auth()->user()->role == 'admin')
                <a href="{{ route('filament.admin.pages.dashboard') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Dashboard</a>
                @else
                <a href="{{ route('dashboard') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Dashboard</a>
                                @endif
                @endauth
            </div>
        </header>
        @yield('content')
        <footer class="text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <a href="{{ url('/') }}" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <img src="{{ asset('tokoku.png') }}" alt="Logo" class="w-10 h-10">
                <span class="ml-3 text-xl">{{ config('app.name' )}}</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© {{ date('Y') }} {{ config('app.name' )}} —
                <a href="https://twitter.com/zuhriutama" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@zuhriutama</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
                </span>
            </div>
            </footer>

        <!-- Sweetalert2 JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
        <script>
            document.addEventListener('livewire:init', function() {
                Livewire.on('message', (event) => {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: event.detail,
                        icon: 'success',
                        timer: 1000,
                        showConfirmButton: false
                    });
                });
            });
        </script>
        @stack('scripts')
    </body>
</html>
