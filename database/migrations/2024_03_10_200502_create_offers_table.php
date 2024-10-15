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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('months_experience');
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade');
            $table->foreignId('skill_id')->constrained('skills')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('salary_id')->constrained('salary_ranges')->onDelete('restrict');
            $table->foreignId('occupation_id')->constrained('occupations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('contract_type_id')->constrained('contracts')->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('workday_id')->constrained('workdays')->onDelete('restrict');
            $table->foreignId('academic_level_id')->constrained('studies')->onDelete('restrict');
            $table->foreignId('ubication_id')->constrained('municipalities')->onDelete('restrict');
            $table->foreignId('requisition_id')->constrained('requisitions');
            $table->date('start_date');
            $table->date('closing_date');
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
        Schema::dropIfExists('offers');
    }
};
