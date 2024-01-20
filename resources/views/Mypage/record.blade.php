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
            
          @php
            $loggedInUserId = Auth::id();
            $selectedMonth = isset($_GET['month']) ? $_GET['month'] : date('Y-m');
            
            
            $uniqueMonths = $records->unique(function ($item) {
                return date('Y-m', strtotime($item->date));})->pluck('date');
        
            $uniqueMonths = $uniqueMonths->map(function ($month) {
                return date('Y-m', strtotime($month)); })->unique();
        
            $uniqueYears = $records->unique(function ($item) {
                return date('Y', strtotime($item->date));})->pluck('date');
        
            $uniqueYears = $uniqueYears->map(function ($year) {
                return date('Y', strtotime($year)); })->unique();
          @endphp
    
      
    
     <p class="text-xl font-bold mb-4 bg-yellow-200 p-2">▶収入情報</p>
     <div class="mx-auto w-2/3">
         <p class="text-xl  border-b border-black">年の収入</p>
          @foreach($uniqueYears as $year)
            @php
                $yearlyEarnings = 0;
            @endphp
        
          
            @foreach($records as $calculate)
            
                @if($calculate->user_id == $loggedInUserId)
                    @php
                        $attendanceYear = date('Y', strtotime($calculate->date));
                    @endphp
        
                  
                    @if($year == $attendanceYear)
                        @php
                            $yearlyEarnings += $calculate->calculateTotalEarnings();
                        @endphp
                    @endif
                @endif
            @endforeach
            
            <p>{{ $year }}年の合計金額: ¥{{ $yearlyEarnings }}</p>
            <div class="border"></div>
          @endforeach
        
          <p class="text-xl  border-b border-black mt-5 mb-5">月ごとの収入</p>
          <form action="" method="get">
            <label for="month">月を選択:</label>
            <select id="month" name="month" onchange="this.form.submit()">
              @foreach($uniqueMonths as $month)
                <option value="{{ $month }}" {{ $selectedMonth == $month ? 'selected' : '' }}>
                  {{ $month }}
                </option>
              @endforeach
            </select>
          </form>
          
        
          @php
            $totalEarnings = 0;
          @endphp
        
          @foreach($records as $calculate)
          
            @if($calculate->user_id == $loggedInUserId)
        
                @php
                    $attendanceMonth = date('Y-m', strtotime($calculate->date));
                @endphp
                @if($selectedMonth == $attendanceMonth)
                <div class=" border mt-5">
               
                    <p>
                        出勤日: {{ $calculate->date }}<br>
                        出勤時間: {{ $calculate->start_time }}<br>
                        退勤時間: {{ $calculate->end_time }}<br>
                        <p>合計金額: ¥{{ $calculate->calculateTotalEarnings() }}</p>
                    </p>
                 </div>   
                    @php
                        $totalEarnings += $calculate->calculateTotalEarnings();
                    @endphp
                @endif
            @endif
            @endforeach
            <p>選択された月の合計金額: ¥{{ $totalEarnings }}</p>
            <div class="border "></div>
            <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
                <a href="{{ route('form') }}">勤怠入力をする</a>
            </div>
    
        <div class="font-semibold border border-black text-black px-5 py-3 rounded max-w-[200px] inline-block mt-5">
            <a href="/">ホームへ</a>
        </div>
        </x-app-layout>
     </body>
</html>
