<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>
        <b>タスク一覧</b>
    </h1>
    @foreach ($tasks as $task)
        <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
        <input type="submit" value="削除する" form="delete" onclick="if(!confirm('本当に削除しますか?')){return false}">
        <form action="/tasks/{{ $task->id }}" method="post" id="delete">
            @csrf
            @method('DELETE')
        </form>
    @endforeach
    <hr>
    <h1>
        <b>新規論文投稿</b>
    </h1>
    <form action="/tasks" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">内容</label>
            <textarea type="text" name="body">{{ old('body') }}</textarea>
        </p>
        <input type="button" value="Create task">
    </form>
</body>

</html>
