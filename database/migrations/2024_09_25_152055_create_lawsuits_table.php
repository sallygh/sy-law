<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawsuitsTable extends Migration
{
    public function up()
    {
        Schema::create('lawsuits', function (Blueprint $table) {
            $table->id();
            $table->string('case_number');
            $table->string('case_type');
            $table->string('case_subject'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lawsuits');
    }
}
