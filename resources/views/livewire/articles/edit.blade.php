<?php

use function Livewire\Volt\{state, mount};
use App\Models\Article;
// ルートモデルバインディング
// 変数定義
state(['article', 'title', 'body']);

// 初期表示時の処理
mount(function (Article $article) {
    // Articleモデルのインスタンスを$articleに代入
    $this->article = $article;
    // 論文タイトルと本文を$this->titleと$this->bodyに代入
    $this->title = $article->title;
    $this->body = $article->body;
});

// 更新処理
$update = function () {
    // memo.phpのfillableで編集する項目を定義済みのため、all()が使える
    $this->article->update($this->all());
    // 選択した論文を表示する詳細画面に遷移
    return redirect()->route('articles.show', $this->article);
};

?>

<div>
    <h1>投稿論文編集</h1>
    {{-- 更新ボタン押下時にupdateメソッドを呼ぶ --}}
    <form wire:submit="update">
        <p>
            <label for="title">論文タイトル</label>
            <br>
            <input type="text" wire:model="title" id="title">
        </p>
        <p>
            <label for="body">本文</label>
            <br>
            {{-- textarea:広がる入力欄 --}}
            <textarea wire:model="body" id="body"></textarea>
        </p>
        {{-- ボタンはformタグの中に配置 --}}
        <button type="submit">更新</button>
    </form>
</div>
