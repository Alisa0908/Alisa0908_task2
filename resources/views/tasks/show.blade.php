<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>
        <b>タスク詳細</b>
    </h1>
    <p>【タイトル】<br>
        {{ $task->title }}</p>
    <p>【内容】<br>
        {{ $task->body }}</p>
    <button type="button" onclick="location.href='/tasks'">一覧へ戻る</button>
    <button type="button" onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</button>
    <input type="submit" value="削除する" onclick="if(!confirm('本当に削除しますか?')){return false}" form="delete">
    <form action="/tasks/{{ $task->id }}" method="post" id="delete">
        @csrf
        @method('DELETE')
    </form>
</body>

</html>
