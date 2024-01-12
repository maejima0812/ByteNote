<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ByteNote</title></title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
  <body>
        <h1></h1>
        <x-app-layout>
            
    <x-slot name="header">
    </s-slot>
        <div class="flex justify-center p-4">
            <form action="{{ route('pick') }}" method="GET">
                @csrf
                <input class="border border-black rounded px-40 py-3   mt-8 mb-4 lg:h-12 xl:h-16" type="text" id="pick" name="keyword" autocomplete="off" placeholder="店舗名を入力してください">
                <button class="font-semibold border border-black text-black  px-5 py-3 rounded" type="submit">検索</button>
            </form>
        </div>
        <div class="border border-black mb-4"></div>
            <h2 class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶口コミを見る</h2>
            <div class="flex justify-center" >
            <table class="w-3/5 ">
                <thead>
                    <tr>
                        <th class="border border-black px-4 py-4">
                            <div class="flex items-center">
                                <img src="https://1.bp.blogspot.com/-Hli6afTS54w/UgSMCMQNnNI/AAAAAAAAW6c/FXu-zvewMWY/s400/food_hamburg.png" style="width: 40px; height: 40px;" alt="飲食業のアイコン">
                                <span class="ml-2">飲食業</span>
                            </div>
                        </th>
                        <th class="border border-black px-4 py-4">
                            <div class="flex items-center">
                                <img src="https://4.bp.blogspot.com/-W3_J14U8zlc/XFPNNJlUNgI/AAAAAAABRVQ/Ct_K7WUkq38GyS7H4LNVEpEoj8v-midnACLcBGAs/s300/building_convenience_store3.png" class="w-6 h-6" alt="小売業のアイコン">
                                <span class="ml-2">小売業</span>
                            </div>
                        </th>
                        <th class="border border-black px-4 py-4 ">
                            <div class="flex items-center">
                                <img src="https://4.bp.blogspot.com/-nNTtA3-PacA/Whu18vpdbnI/AAAAAAABIeM/6JzRsCTpifwlTKqhZevRxj0Q_42MbUcDwCLcBGAs/s400/box_danbo-ru_close.png" class="w-6 h-6" alt="その他のアイコン">
                                <span class="ml-2">その他</span>
                            </div>
                        </th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <tr>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/マクドナルド" class="text-blue-500 underline  inline-block mr-2">マクドナルド</a>
                            </td>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/ファミリーマート" class="text-blue-500 underline inline-block mr-2">ファミリーマート</a>
                            </td>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/TOHOシネマズ" class="text-blue-500 underline inline-block mr-2">TOHOシネマズ</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/吉野家" class="text-blue-500 underline inline-block mr-2">吉野家</a>
                            </td>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/セブンイレブン" class="text-blue-500 underline inline-block mr-2">セブンイレブン</a>
                            </td>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/クロネコヤマト" class="text-blue-500 underline inline-block mr-2">クロネコヤマト</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/ミスタードーナツ" class="text-blue-500 underline inline-block mr-2">ミスタードーナツ</a>
                            </td>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/ローソン" class="text-blue-500 underline inline-block mr-2">ローソン</a>
                            </td>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/アーク引っ越しセンター" class="text-blue-500 underline inline-block mr-2">アーク引越センター</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/ガスト" class="text-blue-500 underline inline-block mr-2">ガスト</a>
                            </td>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/マイバスケット" class="text-blue-500 underline inline-block mr-2">マイバスケット</a>
                            </td>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/イベントスタッフ" class="text-blue-500 underline inline-block mr-2">イベントスタッフ</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/焼肉きんぐ" class="text-blue-500 underline inline-block mr-2">焼肉きんぐ</a>
                            </td>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/ブックオフ" class="text-blue-500 underline inline-block mr-2">ブックオフ</a>
                            </td>
                            <td class="border border-black px-4 py-4 text-center">
                                <a href="/posts/store/試験監督" class="text-blue-500 underline inline-block mr-2">試験監督</a>
                            </td>
                        </tr>
                    </tr>
                </tbody>
            </table>
        </div>
</div>
        <div class="text-xl font-bold "> </div>
       <div class="border border-black mb-4 mt-5"></div>
        <div class='runk'>
            @if(isset($topStores))
            
            <h2 class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶口コミランキング</h2>

<div class="flex justify-center">
    
        <table class="table-auto w-3/5">
            <thead>
                <tr>
                    <th class="border border-black px-4 py-4 text-center">順位</th>
                    <th class="border border-black px-4 py-4 text-center">店舗名</th>
                    <th class="border border-black px-4 py-4 text-center">平均ランク</th>
                </tr>
            </thead>
            <tbody>
                @foreach($topStores as $index => $topStore)
                    <tr>
                        <td class="border border-black px-4 py-4 text-center">{{ $index + 1 }}</td>
                        <td class="border border-black px-4 py-4 text-center">{{ $topStore->name }}</td>
                        <td class="border border-black px-4 py-4 text-center">{{ number_format($topStore->averageRunk, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>ランキング情報がありません。</p>
    @endif
</div>

<div class="border border-black mb-4 mt-4"></div>
<a href="{{ route('select') }}" class="font-semibold border border-black text-black px-5 py-3 rounded">口コミを投稿する</a>
<div class="mt-4"></div>

</div>
</body>
</x-app-layout>
</html>
