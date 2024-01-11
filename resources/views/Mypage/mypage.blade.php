<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ByteNote</title></title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
  <body>
        <x-app-layout>
            
    <x-slot name="header">
         <p class="text-xl font-bold bg-yellow-200 p-2">▶マイページ</p>
        <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
           <a href="{{ route('profile.edit') }}">プロフィールへ</a>
        </div>
         <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
           <a href="{{ route('mypage.record') }}">収入情報</a>
        </div>

        </div>
        <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block">
           <a href="/">ホームへ</a>
        </div>
    </body>
    </x-app-layout>
</html>