<?php

use function Livewire\Volt\{state};
use App\Models\Article;

// ルートモデルバインディング
state(['article' => fn(Article $article) => $article]);

// 一覧に戻るメソッド
$back = function () {
    return redirect()->route('articles.index');
};

// 編集画面へ遷移
$edit = function () {
    return redirect()->route('articles.edit', $this->article);
};

// 削除処理
$delete = function () {
    $this->article->delete();
    // 一覧画面に遷移
    return redirect()->route('articles.index');
};
?>

<div>
    <h1>論文詳細</h1>
    <p>タイトル：{{ $article->title }}</p>
    <p>{!! nl2br(e($article->body)) !!}</p>
    <button wire:click="back">一覧へ戻る</button>
    <button wire:click="edit">編集する</button>
    <button wire:click="delete" wire:confirm="本当に削除しますか？">削除する</button>
</div>
