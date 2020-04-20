<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 8, 2);
            $table->jsonb('frome');
            $table->jsonb('to');
            $table->boolean('invoice')->default(false);
            $table->boolean('contract')->default(false);
            $table->boolean('ticket')->default(false);
            $table->boolean('close')->default(false);
            $table->boolean('abanden')->default(false);
            $table->jsonb('timeline')->nullable();
            $table->text('content')->nullable();
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
        Schema::dropIfExists('finances');
    }
}
