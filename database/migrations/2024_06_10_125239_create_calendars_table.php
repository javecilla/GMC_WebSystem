<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->id();
            #Users table relations
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->string('event_name');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('school_year');
            $table->string('pin')->default('not');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendars');
    }
};
