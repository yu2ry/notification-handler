<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateUserModelTable
 */
final class CreateUserModelTable extends Migration
{

    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('user_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table
                ->string('email')
                ->nullable();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::drop('user_models');
    }
}
