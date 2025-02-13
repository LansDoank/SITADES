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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('institution');
            $table->string('address');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->string('telephone');
            $table->string('visitor_photo');
            $table ->foreignId('visit_type_id')->constrained(
                table: 'visit_types',
                indexName: 'visitors_visit_types'
            );
            $table->string('objective');
            $table->string('i_n_i')->nullable();
            $table->string('province_code');
            $table->string('district_code');
            $table->string('subdistrict_code');
            $table->string('village_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
