<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalCasesTable extends Migration
{
    public function up()
    {
        Schema::create('legal_cases', function (Blueprint $table) {
            $table->id();
            $table->string('case_number');
            $table->string('case_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('legal_cases');
    }
}
