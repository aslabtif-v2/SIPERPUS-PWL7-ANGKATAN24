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
        // beri perintah menambahkan kolom baru (qty)
        Schema::table('bookshelfs', function(Blueprint $table){
            $table->integer('qty')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //menghapus kolom qty
        Schema::table('bookshelf', function(Blueprint $table){
            $table->dropColumn('qty');
        });

    }
};
