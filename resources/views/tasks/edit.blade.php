<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>
        <b>投稿論文編集</b>
    </h1>
    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">論文タイトル</label>
            <input type="text" name="title" value="{{ old('title', $task->title) }}">
        </p>
        <p>
            <label for="body">本文</label>
            <input type="text" name="body" value="{{ old('body', $task->body) }}">
        </p>
        <input class="buttons" type="submit" value="更新">
        <button type="button" onclick="location.href='/tasks'">詳細に戻る</button>
    </form>
</body>

</html>
