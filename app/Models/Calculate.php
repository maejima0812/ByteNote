<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculate extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'start_time', 'end_time', 'late_night_rate', 'hourly_rate'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

   public function calculateWorkingHours()
{
    $start = strtotime($this->start_time);
    $end = strtotime($this->end_time); // Combine date and time for end

    // Adjust for work spanning two days
    if ($end < $start) {
        $end += 86400; // Add 24 hours
    }

    $diff = $end - $start;

    // Convert seconds to hours
    return $diff / 3600;
}

public function calculateLateNightHours()
{
    $start = strtotime($this->date . ' ' . $this->start_time);
    $end = strtotime($this->date . ' ' . $this->end_time);

    // 深夜時間の計算
    $lateNightStart = strtotime($this->date . ' 22:00');
    $lateNightEnd = strtotime($this->date . ' 05:00') + 86400; // 次の日の05:00を秒で表す

    if ($end < $start) {
        $end += 86400; // 1日を秒で表す
    }
    elseif($start < strtotime($this->date . ' 05:00') ){
          $start += 86400;
          $end += 86400;
    }
   

    $lateNightHours = 0;

    // 22時から翌日の5時までの時間を計算
    if ($end > $lateNightStart && $start < $lateNightEnd) {
        $lateNightStart = max($start, $lateNightStart);
        $lateNightEnd = min($end, $lateNightEnd);
        $lateNightHours = ($lateNightEnd - $lateNightStart) / 3600;
    }

    return $lateNightHours;
}

public function calculateTotalEarnings()
{
    $workingHours = $this->calculateWorkingHours();
    $lateNightHours = $this->calculateLateNightHours();

    // 22時から翌日の5時までの時間帯の深夜料金を設定
    $lateNightRate = $this->late_night_rate;

    $normalHours = $workingHours - $lateNightHours;

    $normalEarnings = $normalHours * $this->hourly_rate;
    $lateNightEarnings = $lateNightHours * $lateNightRate;

    // Round normal and late-night earnings
    $normalEarnings = $this->roundEarnings($normalEarnings);
    $lateNightEarnings = $this->roundEarnings($lateNightEarnings);

    return $normalEarnings + $lateNightEarnings;
}

private function roundEarnings($amount)
{
    // Check if the amount has decimal part
    if (strpos($amount, '.') !== false) {
        $integerPart = floor($amount);
        $decimalPart = $amount - $integerPart;

        // Round the decimal part
        if ($decimalPart >= 0.5) {
            return $integerPart + 1;
        } else {
            return $integerPart;
        }
    }

    return $amount;
}



}
