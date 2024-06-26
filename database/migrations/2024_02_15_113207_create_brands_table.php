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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string("industry")->nullable();
            $table->string("cover_photo")->nullable();
            $table->string("location")->nullable();
            $table->text("description")->nullable();
            $table->string("website")->nullable();
            $table->string("instagram")->nullable();
            $table->string("tiktok")->nullable();
            $table->string("youtube")->nullable();
            $table->string("twitter")->nullable();
            $table->string("categories")->nullable();
            $table->string("familiarity")->nullable();
            $table->string("platforms")->nullable();
            $table->string("need")->nullable();
            $table->string("content")->nullable();
            $table->string("genderOption")->nullable();
            $table->unsignedBigInteger("user_id");
            $table->foreign("user_id")
                ->references("id")
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
