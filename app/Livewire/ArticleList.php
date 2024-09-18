<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleList extends Component
{
    use WithPagination;
    
    public function render()
    {
        $articles = Article::published()->latest()->paginate(12);
        return view('livewire.article-list', compact('articles'));
    }
}
