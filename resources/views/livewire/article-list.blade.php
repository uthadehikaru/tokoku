<div>
    <div class="container px-5 py-24 mx-auto">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Artikel Terbaru</h2>
        <div class="flex flex-wrap -m-4">
            @foreach($articles as $article)
            <x-article-card :article="$article" />
            @endforeach
        </div>
    </div>
</div>
