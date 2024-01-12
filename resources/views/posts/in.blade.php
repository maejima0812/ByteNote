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
            <div class="bg-white">
                
                <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶検索結果</p>
              
                @if(request()->has('keyword'))
                    @php
                        $searchedKey = request('keyword');
                        $matchedStore = App\Models\Store::where('name', $searchedKey)->first();
                        session(['keyword' => $searchedKey]);
                            
                    @endphp
        
                    @if($matchedStore)
                        <h1 class="text-3xl">{{ $searchedKey }}がヒットしました。</h1>
                        <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                            <a href="{{ route('post', ['store_id' => $matchedStore->id, 'keyword' => $searchedKey]) }}">口コミを投稿する</a>
                        </div>
                        <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block">
                            <a href="/posts/store/{{$searchedKey}}">口コミを見る</a>
                        </div>
                        
                    @else
                        <p class="text-2xl">検索された店舗は存在しません。</p>
                        <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                            <a href="/">ホームへ</a>
                        </div>
                    @endif
                @endif
            </div>
        
    </x-app-layout>
        
</body>
</html>