<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('contraceptive_id');
            $table->integer('age');
            $table->integer('amount_children');
            $table->integer('birth_interval');
            $table->boolean('post_birth_status');
            $table->boolean('post_miscarriage_status');
            $table->string('contraceptive_status');
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
        Schema::dropIfExists('consultations');
    }
}
