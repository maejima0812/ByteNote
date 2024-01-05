<!-- resources/views/posts/index.blade.php -->

<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        
    </head>
    <body>
        <x-app-layout>
            
    <x-slot name="header">
        <div class="bg-white">
            <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶投稿完了</p>
            <title>投稿画面</title>
            <p class="text-xl">投稿が完了しました。</p>
           <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                            <a href="/">ホームへ</a>
                        </div>
        </div>    
        </x-app-layou>
    </body>
</html>