<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <x-app-layout>
            
    <x-slot name="header">
        <div class="address">
              <div class="container">
        <form method="POST" action="/posts/register">
            @csrf
            <p class="fsize">新規登録</p>
            名前
            <input type="text" name="name"><br>
            年齢
            <input type="text" name="age"><br>
            性別
            <input type="text" name="gender"><br>
            住所
            <input type="text" name="address"><br>
            現在のバイト先
            <input type="text" name="current_job"><br>
            メールアドレス
            <input type="text" name="email"><br>
            パスワード
            <input type="password" name="password"><br>
            <a href="/posts/register_end">登録</button>
            <a href="/posts/login">既にアカウントをお持ちの方</a>
            <a href="/">戻る</a>
        </form>
    </div>
        </div>
    </x-app-layou>  
    </body>
</html>