<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>ByteNote</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
    <body>
        <x-app-layout>
            <x-slot name="header"></x-slot>
            <!--店舗検索-->
            <h2 class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶店舗検索</h2>
            <div class="flex justify-center p-4">
                <form action="{{ route('search') }}" method="GET">
                    @csrf
                    <input class="border border-black rounded px-40 py-3   mt-8 mb-4 lg:h-12 xl:h-16" type="text" id="pick" name="keyword" autocomplete="off" placeholder="店舗名を入力してください">
                    <button class="font-semibold border border-black text-black  px-5 py-3 rounded" type="submit">検索</button>
                </form>
            </div>
            
            <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                <a href="/">ホームへ</a>
            </div>
        </x-app-layout>
    </body>
</html>