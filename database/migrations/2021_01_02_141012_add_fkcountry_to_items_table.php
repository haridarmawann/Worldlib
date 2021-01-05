<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkcountryToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign('items_article_id_foreign');
            $table->foreign('article_id')
            ->references('id')->on('articles')
            ->onDelete('set null');
            $table->dropForeign('items_artist_id_foreign');
            $table->foreign('artist_id')
            ->references('id')->on('artists')
            ->onDelete('cascade');
            $table->dropForeign('items_type_id_foreign');
            $table->foreign('type_id')
            ->references('id')->on('types')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            //
        });
    }
}
