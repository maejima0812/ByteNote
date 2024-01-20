<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>ByteNote - {{ $store_id}} の口コミ</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
    <body>
        <x-app-layout>
            <x-slot name="header"></s-slot>
            <!--口コミ一覧表示-->
            <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶{{ $store->name }} の口コミ一覧</p>
        
            <p>評価平均: 
            @for ($i = 1; $i <= 5; $i++)
                @if ($i <= $averageRunk)
                    <span class="text-yellow-500">★</span>
                @else
                    <span class="text-gray-300">★</span>
                @endif
            @endfor
            </p>
            @if($posts->isEmpty())
                <p>まだ口コミはありません。</p>
            @else
                @foreach($posts as $post)
                <div class="max-w-xl mx-auto">
                    <div class="border p-6 rounded-md　mb-8">
                        <h2>{{ $post->name }}さんからの投稿　{{$post->created_at}}</h2>
                        <div>
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $post->runk)
                                    <span class="text-yellow-500">★</span>
                                @else
                                    <span class="text-gray-300">★</span>
                                @endif
                            @endfor
                        </div>
                        <h2 class="font-bold  ">{{ $post->title }}</h2>
                        <h2>{{ $post->body }}</h2>
                    </div>
                    <!--質問をする・見る-->
                    <div class="border p-4 rounded-md　mt-4 mb-8">
                        <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                            <a href="{{ route('posts.comments', ['id'=>$post->id,'name' => $post->name, 'title' => $post->title, 'body' => $post->body]) }}">質問をする</a>
                        </div>
                        <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                            <a href="{{ route('posts.look', ['id'=>$post->id,'name' => $post->name, 'title' => $post->title, 'body' => $post->body]) }}">質問を見る</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
            <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                   <a href="/">ホームへ</a>
            </div>
        </x-app-layout>
    </body>
</html>
