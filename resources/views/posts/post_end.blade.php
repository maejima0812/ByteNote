
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>ByteNote</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
    <body>
        <x-app-layout>
            <x-slot name="header">
            <!--投稿完了画面-->
            <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶投稿完了</p>
            <p class="text-xl">投稿が完了しました。</p>
            <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                <a href="/">ホームへ</a>
            </div>
    
        </x-app-layout>
    </body>
</html>