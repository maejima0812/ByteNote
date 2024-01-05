
<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        
</head>
<body>
    <x-app-layout>
            
    <x-slot name="header">
        <div class="bg-white">
            <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶コメント・質問先の投稿</p>
            <title>投稿画面</title>
            <form action="{{ route('posts.store') }}"  method="POST">
                @csrf
              　    <p class="bold-text">店舗名: {{ session('keyword') }}</p>
                
                <div class="runk">
                    <label for="post.runk">評価:</label>
                    
                    <input type="radio" id="star1" name="post[runk]" value="1">
                    <p class="title__error" style="color:red">{{ $errors->first('post.runk')}}</p>
                    
                    <input type="radio" id="star2" name="post[runk]" value="2">
                    <p class="title__error" style="color:red">{{ $errors->first('post.runk')}}</p>
        
                    <input type="radio" id="star3" name="post[runk]" value="3">
                    <p class="title__error" style="color:red">{{ $errors->first('post.runk')}}</p>
                    
                    <input type="radio" id="star4" name="post[runk]" value="4">
                    <p class="title__error" style="color:red">{{ $errors->first('post.runk')}}</p>
                    
                    <input type="radio" id="star5" name="post[runk]" value="5">
                     <p class="title__error" style="color:red">{{ $errors->first('post.runk') }}</p>
        
                    
                    
                </div>
               
                
            <form action="{{ route('posts.store') }}"  method="POST">
                @csrf
                
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
                <div class="id"></div>
                <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block">
                    <input type="submit" value="投稿する"/>
                </div>
        </form>
            
            <div class="text-blue-500 underline inline-block mr-2">[<a href="{{ route('select') }}">back</a>]</div>
        </div>
    </x-app-layou>
</body>
</html>