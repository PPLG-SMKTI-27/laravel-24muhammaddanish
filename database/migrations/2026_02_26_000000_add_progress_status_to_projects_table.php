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
        Schema::table('projects', function (Blueprint $table) {
            if (!Schema::hasColumn('projects', 'progress')) {
                $table->integer('progress')->default(0)->after('description');
            }
            if (!Schema::hasColumn('projects', 'status')) {
                $table->string('status')->default('ACTIVE')->after('progress');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            if (Schema::hasColumn('projects', 'progress')) {
                $table->dropColumn('progress');
            }
            if (Schema::hasColumn('projects', 'status')) {
                $table->dropColumn('status');
            }
        });
    }
};
