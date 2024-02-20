<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('schoolowners', function (Blueprint $table) {
            $table
                ->foreign('systemowner_id')
                ->references('id')
                ->on('systemowners')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schoolowners', function (Blueprint $table) {
            $table->dropForeign(['systemowner_id']);
        });
    }
};
