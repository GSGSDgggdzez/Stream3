<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Series', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Small_Thumbnail_Url');
            $table->string('Big_Thumbnail_Url');
            $table->string('Description');
            $table->date('Release_Year');
            $table->string('Genre');
            $table->bigInteger('Total_Views')->default(0);
            $table->string('Available_Language');
            $table->integer('Total_Seasons');
            $table->timestamps();
        });

        Schema::create('Episodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Series_Id');
            $table->string('Title');
            $table->string('Description');
            $table->integer('Season_Number');
            $table->integer('Episode_Number');
            $table->string('Video_Url');
            $table->bigInteger('Views')->default(0);
            $table->time('Duration');
            $table->timestamps();

            $table->foreign('Series_Id')
                  ->references('id')
                  ->on('Series')
                  ->onDelete('cascade');
        });

        Schema::create('Series_Cast', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Picture_Url');
            $table->unsignedBigInteger('Series_Id');
            $table->string('Biography');
            $table->string('Position');
            $table->timestamp('created_at')->nullable();
            
            $table->foreign('Series_Id')
                  ->references('id')
                  ->on('Series')
                  ->onDelete('cascade');
        });

        Schema::create('Series_Comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Series_Id');
            $table->unsignedBigInteger('User_Id');
            $table->string('Rate');
            $table->string('Comment');
            $table->timestamp('created_at')->nullable();

            $table->foreign('Series_Id')
                ->references('id')
                ->on('Series')
                ->onDelete('cascade');

            $table->foreign('User_Id')
                ->references('id')
                ->on('Users')
                ->onDelete('cascade');
        });

        Schema::create('Series_Global_Rate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Series_Id');
            $table->string('Company_Name');
            $table->string('Rate');
            $table->timestamp('created_at')->nullable();

            $table->foreign('Series_Id')
                ->references('id')
                ->on('Series')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Series_Global_Rate');
        Schema::dropIfExists('Series_Comments');
        Schema::dropIfExists('Series_Cast');
        Schema::dropIfExists('Episodes');
        Schema::dropIfExists('Series');
    }
};
