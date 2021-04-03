<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('job_id')
                ->constrained()
                ->onDelete('cascade');
            $table->unsignedInteger('user_id')
                ->constrained()
                ->onDelete('cascade');
            $table->timestamp('started_at');
            $table->timestamp('stopped_at')->default(null)->nullable();
            $table->decimal('total_hours', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timesheets');
    }
}
