<?php

use function Livewire\Volt\{state};
use App\Models\Article;

// Articleモデルの値全件取得
state(['articles' => fn() => Article::all()]);

// 新規作成メソッド
$create = function () {
    return redirect()->route('articles.create');
};

?>

<div>
    <h1>論文一覧</h1>

    {{-- 全件取得したArticleでループし、全件表示 --}}
    @foreach ($articles as $article)
        <p>
            {{-- titleをリンクで表示 --}}
            <a href="{{ route('articles.show', $article) }}">
                {{ $article->title }}</a>
            <br>
        </p>
    @endforeach

    <button wire:click="create">新規論文投稿</button>

</div>
