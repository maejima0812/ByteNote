<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <x-app-layout>
            
    <x-slot name="header">
        
        <div class="address">
              <div class="container">
      <form>
        <p class="fsize">ログイン画面</p>
        メールアドレス
        <input type="text" /><br>
        パスワード
        <input type="password" /><br>
        <button type="submit">パスワードを忘れた方</button><br>
        <a href="/posts/register" class="btn">新規登録</a><br>
        <a href="/posts/mypage" class="btn">ログイン</a>
        <a href="/"><button　type="submit">戻る</button></a>
      </form>
    </div>
        </div>
    </x-app-layou>
    </body>
</html>