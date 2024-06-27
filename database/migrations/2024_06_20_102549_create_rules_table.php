<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->string('group_age');
            $table->integer('minimum_age'); // Batas usia minimum
            $table->integer('maximum_age'); // Batas usia maksimum
            $table->integer('amount_children');
            $table->integer('birth_interval');
            $table->boolean('post_birth_status');
            $table->boolean('post_miscarriage_status');
            $table->string('contraceptive_status');
            $table->foreignId('contraceptive_id');
            // $table->double('probability');
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
        Schema::dropIfExists('rules');
    }
}
