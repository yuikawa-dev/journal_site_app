<?php

use function Livewire\Volt\{state};
use App\Models\Article;

// ルートモデルバインディング
state(['article' => fn(Article $article) => $article]);

// 一覧に戻るメソッド
$back = function () {
    return redirect()->route('articles.index');
};
?>

<div>
    <h1>{{ $article->title }}</h1>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <button wire:click="back">一覧へ戻る</button>
</div>
