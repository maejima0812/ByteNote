<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    <p>検索キーワード: {{ $keyword }}</p>

    <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
           <a href="/">ホームへ</a>
        </div>
</body>
</html>