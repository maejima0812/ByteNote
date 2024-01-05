<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Search</title>
</head>
<body>
    <x-app-layout>
            
    <x-slot name="header"></x-slot>
        <div class="bg-white ">
            <h2 class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶店舗検索</h2>
             <div class="flex justify-center p-4">
            <form action="{{ route('pick') }}" method="GET">
                @csrf
                <input class="border border-black rounded px-40 py-3   mt-8 mb-4 lg:h-12 xl:h-16" type="text" id="pick" name="keyword" autocomplete="off" placeholder="店舗名を入力してください">
                <button class="font-semibold border border-black text-black  px-5 py-3 rounded" type="submit">検索</button>
            </form>
        </div>
            
    
    </x-app-layout>
</body>
</html>