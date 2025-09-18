<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryidToItemsTable extends Migration
{
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->unsignedBigInteger('categoryID')->onDelete()->cascade()->after('id'); // adjust 'after' if needed

            // If you're setting up a foreign key to a `categories` table:
            // $table->foreign('categoryID')->references('id')->on('item_categories')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            // Drop the foreign key first if it exists
            // $table->dropForeign(['categoryID']);

            $table->dropColumn('categoryID');
        });
    }
};
