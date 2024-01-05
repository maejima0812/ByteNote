<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>登録完了</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
       <x-app-layout>
            
    <x-slot name="header">
        <div class="container">
            <h1>登録完了</h1>
            <p>ユーザーの登録が完了しました。以下は登録情報です。</p>
            
            @if(isset($user))
                <p>名前: {{ $user->name }}</p>
                <p>年齢: {{ $user->age }}</p>
                <p>性別: {{ $user->gender }}</p>
                <p>住所: {{ $user->address }}</p>
                <p>現在のバイト先: {{ $user->current_job }}</p>
                <p>メールアドレス: {{ $user->password }}</p>
            @endif
            
            <a href="/">トップページへ</a>
        </div> 
        </x-app-layout>
    </body>
</html>