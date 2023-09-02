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
        Schema::table('works', function(Blueprint $table) {
            $table->string('title')->after('overlay-color');
            $table->renameColumn('`overlay-color`','`overlay_color`');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('works', function(Blueprint $table) {
            $table->dropColumn(['title']);
            $table->renameColumn('`overlay_color`','`overlay-color`');
        });
    }
};
