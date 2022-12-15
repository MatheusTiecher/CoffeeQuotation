<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_quotation_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->foreignId('user_quotation_id')->constrained('user_quotations')->onDelete('cascade');
            $table->foreignId('quotation_item_id')->constrained('quotation_items')->onDelete('cascade');
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
        Schema::dropIfExists('user_quotation_items');
    }
};
