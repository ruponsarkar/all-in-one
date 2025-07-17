<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions_status', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'submission_id');
            $table->string(column: 'msid');
            $table->string(column: 'status');
            $table->text(column: 'article_link')->nullable();
            $table->string(column: 'date');
            $table->string(column: 'updated_by')->nullable();
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
        Schema::dropIfExists('submissions_status');
    }
}
