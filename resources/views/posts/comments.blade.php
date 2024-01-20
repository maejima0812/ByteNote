<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>ByteNote</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
    <body>
        <x-app-layout>
        <x-slot name="header"></x-slot>
            <!--コメント質問先の投稿表示-->
            <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶コメント・質問先の投稿</p>
            
            <div class="border p-4">
                <p>{{ $name }}さん　{{$post->created_at}}</p>
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $post->runk)
                        <span class="text-yellow-500">★</span>
                    @else
                        <span class="text-gray-300">★</span>
                    @endif
                @endfor
                <p class="font-bold">{{ $title }}</p>
                <p>{{ $body }}</p>
            </div>
            
            <!--コメント・質問投稿-->
            <p class="text-xl font-bold mb-4 bg-yellow-200 p-2 mt-5">▶コメント・質問</p>
            
            <form action="{{ route('posts.question', ['id' => $post->id, 'name' => $post->name, 'title' => $post->title, 'body' => $post->body]) }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                
                <div class="name">
                    <h2>ニックネーム</h2>
                    <input class="border border-black rounded px-4 py-2  mb-4 lg:h-12 xl:h-16" type="text" id="name" name="comments[name]" value="{{ old('comments.name') }}">
                    <p class="title__error">{{ $errors->first('comments.name')}}</p>
                </div>
                
                <div class="body">
                    <h2>本文</h2>
                    <textarea class="border border-black rounded px-40 py-4   mb-4 lg:h-12 xl:h-16" type="textarea" id="body" name="comments[body]" value="{{ old('comments.body') }}"></textarea>
                    <p class="title__error" style="color:red">{{ $errors->first('comments.body')}}</p>
                </div>
                  
                <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block">
                    <input type="submit" value="投稿する"/>
                </div>
            </form>
            
            <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                <a href="{{ route('posts.look', ['id' => $post->id, 'name' => $post->name, 'title' => $post->title, 'body' => $post->body]) }}">質問を見る</a>
            </div>
                    
            <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block">
                <a href="/">ホームへ</a>
            </div>
    
         </x-app-layout>
    </body>
</html>
