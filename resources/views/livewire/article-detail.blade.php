<div>
    <div class="container mx-auto px-4 py-8">
        <article class="max-w-3xl mx-auto">
            <h1 class="text-4xl font-bold mb-4">{{ $article->title }}</h1>

            @if($article->image)
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="w-full h-auto mb-8 rounded-lg shadow-md">
            @endif

            <div class="prose prose-lg max-w-none article">
                {!! $article->content !!}
            </div>
            <p class="text-gray-500 text-sm mt-4">Dipublikasikan pada {{ $article->created_at->format('d F Y') }}</p>
        </article>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-semibold mb-4">Artikel Terkait</h2>
        <div class="flex flex-wrap -m-4">
            @foreach($relatedArticles as $article)
            <x-article-card :article="$article" />
            @endforeach
        </div>
    </div>
</div>
@push('styles')
    <style>
        .article {
            @apply text-gray-700;
            font-size: 1.125rem;
            line-height: 1.75rem;
        }
        .article p {
            padding: 0.2em 0;
        }
    </style>
@endpush