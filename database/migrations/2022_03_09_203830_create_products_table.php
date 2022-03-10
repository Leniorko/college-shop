<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     * Generates products table
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->float("price");
            $table->text("img_url");
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            // Extra data that not critical to the system.
            $table->string('country')->nullable(); // Can be placed to it's own table
            $table->integer('creation_year', false, true)->nullable();
            $table->string('model')->nullable(); // Can be placed to it's own table
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
        Schema::dropIfExists('products');
    }
}
