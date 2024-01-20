<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ByteNote</title></title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
    <body>
        <x-app-layout>
        <x-slot name="header"></x-slot>
            <div class="container row justify-content-center col-md-8 ">
                <!--出勤データ入力-->
                <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶出勤データ入力</p>
                <form action="{{ route('calculate') }}" method="post">
                    @csrf
                    <div class="day">
                        <h2>出勤日</h2>
                        <input class="border border-black rounded px-4 py-2  mb-4 lg:h-12 xl:h-16" type="date" id="date" name="calculate[date]" value="{{ old('calculate.date') }}">
                        <p class="title__error" style="color:red">{{ $errors->first('calculate.date')}}</p>
                    </div>
                    <div class="start_time">
                        <h2>出勤時間</h2>
                        <input class="border border-black rounded px-4 py-2  mb-4 lg:h-12 xl:h-16" type="time" id="start_time" name="calculate[start_time]" value="{{ old('calculate.start_time') }}">
                        <p class="title__error" style="color:red">{{ $errors->first('calculate.start_time')}}</p>
                    </div>
                    <div class="end_dime">
                        <h2>退勤時間</h2>
                        <input  class="border border-black rounded px-4 py-2  mb-4 lg:h-12 xl:h-16" type="time" id="end_time" name="calculate[end_time]" value="{{ old('calculate.end_time') }}">
                        <p class="title__error" style="color:red">{{ $errors->first('calculate.end_time')}}</p>
                    </div>
                    <div class="money">
                        <h2>基本の時給</h2>
                        <input class="border border-black rounded px-4 py-2  mb-4 lg:h-12 xl:h-16" type="number" id="hourly_rate" name="calculate[hourly_rate]" value="{{ old('calculate.hourly_rate') }}">
                        <p class="title__error" style="color:red">{{ $errors->first('calculate.hourly_rate')}}</p>
                    </div>
                    <div class="night_money">
                        <h2>深夜の時給</h2>
                        <input class="border border-black rounded px-4 py-2  mb-4 lg:h-12 xl:h-16" type="number" id="late_night_rate" name="calculate[late_night_rate]" value="{{ old('calculate.late_night_rate') }}">
                        <p class="title__error" style="color:red">{{ $errors->first('calculate.late_night_rate')}}</p>
                    </div>
                    <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                       <button type="submit" class="btn btn-primary">登録</button>
                    </div>
                </form>
            </div>
            <div class="flex space-x-5 mt-5">
                <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block">
                    <a href="{{ route('record') }}">戻る</a>
                </div>
                <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block">
                    <a href="/">ホームへ</a>
                </div>
            </div>
        </x-app-layout>
    </body>
</html>