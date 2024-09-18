<div class="p-4 md:w-1/3">
    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
        <a href="{{ route('article.detail', $article->slug) }}">
            <img class="lg:h-48 md:h-36 w-full object-contain object-center" src="{{ $article->image ? asset('storage/' . $article->image) : asset('no photo.jpg') }}" alt="blog">
        </a>
        <div class="p-6">
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $article->title }}</h1>
            <p class="leading-relaxed mb-3">{{ $article->short_description }}</p>
            <div class="flex items-center flex-wrap ">
                <a href="{{ route('article.detail', $article->slug) }}" class="text-yellow-500 inline-flex items-center md:mb-2 lg:mb-0">Baca Selengkapnya
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>