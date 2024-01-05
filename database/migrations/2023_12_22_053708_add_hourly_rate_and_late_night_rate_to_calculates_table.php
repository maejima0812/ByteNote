<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class AddHourlyRateAndLateNightRateToCalculatesTable extends Migration
{
    public function up()
    {
        Schema::table('calculates', function (Blueprint $table) {
            $table->decimal('hourly_rate', 8, 2)->nullable();
            $table->decimal('late_night_rate', 8, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::table('calculates', function (Blueprint $table) {
            $table->dropColumn('hourly_rate');
            $table->dropColumn('late_night_rate');
        });
    }
}
