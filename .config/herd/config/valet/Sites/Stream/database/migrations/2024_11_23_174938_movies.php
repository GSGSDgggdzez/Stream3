<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Movies', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Small_Thumbnail_Url');
            $table->string('Big_Thumbnail_Url');
            $table->string('Description');
            $table->date('Release_Year');
            $table->string('Video_Url');
            $table->string('Genre');
            $table->bigInteger('Total_Views')->default(0);
            $table->string('Available_Language');
            $table->timestamps();
        });

        Schema::create('Movie_Views', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Movie_Id');
            $table->timestamp('Viewed_At')->useCurrent();
            $table->integer('View_Count')->default(1);
            $table->timestamps();

            $table->foreign('Movie_Id')
                  ->references('id')
                  ->on('Movies')
                  ->onDelete('cascade');
        });

        Schema::create('Weekly_Views', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Movie_Id');
            $table->date('Week_Start');
            $table->date('Week_End');
            $table->integer('Weekly_View_Count')->default(0);
            $table->decimal('Growth_Rate', 10, 2)->default(0);
            $table->timestamps();

            $table->foreign('Movie_Id')
                  ->references('id')
                  ->on('Movies')
                  ->onDelete('cascade');
        });

        Schema::create('Cast', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Picture_Url');
            $table->unsignedBigInteger('Movie_Id');
            $table->string('Biography');
            $table->string('Position');
            $table->timestamp('created_at')->nullable();
            
            $table->foreign('Movie_Id')
                  ->references('id')
                  ->on('Movies')
                  ->onDelete('cascade');
        });

        Schema::create('Comment', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Movie_Id');
            $table->unsignedBigInteger('User_Id');
            $table->string('Rate');
            $table->string('Comment');
            $table->timestamp('created_at')->nullable();

            $table->foreign('Movie_Id')
                ->references('id')
                ->on('Movies')
                ->onDelete('cascade');

            $table->foreign('User_Id')
                ->references('id')
                ->on('Users')
                ->onDelete('cascade');
        });

        Schema::create('Global_Rate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Movie_Id');
            $table->string('Company_Name');
            $table->string('Rate');
            $table->timestamp('created_at')->nullable();

            $table->foreign('Movie_Id')
                ->references('id')
                ->on('Movies')
                ->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Global_Rate');
        Schema::dropIfExists('Comment');
        Schema::dropIfExists('Weekly_Views');
        Schema::dropIfExists('Movie_Views');
        Schema::dropIfExists('Cast');
        Schema::dropIfExists('Movies');
    }
};
