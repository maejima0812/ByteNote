<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>ByteNote ミ</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
    <x-app-layout>
        <x-slot name="header"></x-slot>
            <div class="bg-white">
                <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶元の投稿</p>
                <div class="mx-auto w-2/3">
                <div class="border p-4 mb-4">
                     
                    <p>{{ $name }}さん　{{$post->created_at}}</p>
                    <div>
                        @for ($i = 1; $i <= 5; $i++)
                        @if ($i <= $post->runk)
                            <span class="text-yellow-500">★</span>
                        @else
                            <span class="text-gray-300">★</span>
                        @endif
                        @endfor
                    </div>
                    <p class="font-bold">{{ $title }}</p>
                    <p>{{ $body }}</p>
                </div>
                </div>
                <div>
                    <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶コメント・質問</p>
                </div>
                <div class="mx-auto w-2/3">

                <div class="rounded mb-4">
                    @if($comments->isEmpty())
                        <p>まだコメントはありません。</p>
                    @else
                    @foreach($comments as $comment) 
                    @if($comment->posts_id == $id)
                    <div class="border p-4 rounded mb-4">
                        <h2>{{ $comment->name }}さん　{{ $comment->created_at }}</h2>
                        <p>{{ $comment->body }}</p>
                    </div>
                            @endif
                        @endforeach
                    @endif
                </div>
                <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
            <a  href="{{ route('posts.comments', ['id'=>$post->id,'name' => $post->name, 'title' => $post->title, 'body' => $post->body]) }}">質問・返信をする</a>
        </div>
        <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
            <a href="/">ホームへ</a>
        </div>

           
        
    </x-app-layout>
</body>
</html>