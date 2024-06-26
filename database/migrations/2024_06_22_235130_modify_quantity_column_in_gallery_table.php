<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyQuantityColumnInFruitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fruit', function (Blueprint $table) {
            $table->string('quantity')->change(); // Change quantity column to string
            $table->string('item')->nullable(); // Add new column
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fruit', function (Blueprint $table) {
            $table->decimal('quantity', 8, 2)->change(); // Revert back to decimal if needed
            $table->dropColumn('item'); // Drop new column
        });
    }
}
