<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>ByteNote</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
    <body>
        <x-app-layout>
            <x-slot name="header"></s-slot>
            <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶口コミを投稿</p>
            <form action="{{ route('post') }}"  method="POST">
                @csrf
                <input type="hidden" name="store_id" value="{{ $store_id }}">
                <p class="bold-text">店舗名: {{ session('keyword') }}</p>
                        
                <div class="runk">
                    <label for="post.runk">評価</label>
                
                    @for ($i = 1; $i <= 5; $i++)
                        <input type="radio" id="star{{ $i }}" name="post[runk]" value="{{ $i }}" class="text-yellow-500">
                        <label for="star{{ $i }}" class="text-yellow-500">{{ str_repeat('★', $i) }}</label>
                    @endfor
                    <p class="title__error" style="color:red">{{ $errors->first('post.runk') }}</p>
                </div>
                <div class="name">
                    <h2>ニックネーム</h2>
                    <input class="border border-black rounded px-4 py-2  mb-4 lg:h-12 xl:h-16"　<input type="text" name="post[title]" value="{{ old('post.title') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class="name">
                    <h2>タイトル</h2>
                    <input class="border border-black rounded px-4 py-2  mb-4 lg:h-12 xl:h-16"　type="text" name="post[name]" value="{{ old('post.name') }}"/>
                    <p class="title__error">{{ $errors->first('post.name') }}</p>
                </div>
                <div class="body">
                    <h2>本文</h2>
                    <textarea class="border border-black rounded px-40 py-4   mb-4 lg:h-12 xl:h-16" name="post[body]" class="h-32">{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block">
                    <input type="submit" value="投稿する"/>
                </div>
            </form>
                
            <div class="flex space-x-5 mt-5">
                <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block">
                    <a href="{{ route('go_search') }}">戻る</a>
                </div>
                <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block">
                    <a href="/">ホームへ</a>
                </div>
            </div>
        </x-app-layout>
    </body>
</html>