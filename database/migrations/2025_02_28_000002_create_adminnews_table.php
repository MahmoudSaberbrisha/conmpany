<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('admin_news', function (Blueprint $table) {
=======
        Schema::create('adminnews', function (Blueprint $table) {
>>>>>>> 09cb4c8f13bbc80c3e3a01297cc00c9f4f3888e6
            $table->id();
            $table->string('adminname');
            $table->text('disc');
            $table->string('image')->nullable();
            $table->timestamp('datatime')->useCurrent();
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
        Schema::dropIfExists('adminnews');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 09cb4c8f13bbc80c3e3a01297cc00c9f4f3888e6
