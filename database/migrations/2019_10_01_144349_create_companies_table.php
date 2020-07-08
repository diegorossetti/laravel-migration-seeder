<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('companies', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('name') -> unique();
      $table->string('phone') -> unique();
      $table->string('mail') -> unique();
      $table->string('website') -> unique();
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
    Schema::dropIfExists('companies');
  }
}
