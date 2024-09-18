<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleDetail extends Component
{
    public Article $article;
    public $relatedArticles = [];

    public function mount(Article $article)
    {
        $this->article = $article;
        $this->relatedArticles = Article::published()->latest()->where('id', '!=', $article->id)->take(3)->get();
    }

    public function render()
    {
        return view('livewire.article-detail');
    }
}
