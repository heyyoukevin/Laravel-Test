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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("userid");
            $table->foreign("userid")->references("id")->on("regusers")->onDelete("cascade");
            $table->unsignedBigInteger("catid");
            $table->foreign("catid")->references("id")->on("categories")->onDelete("cascade");
            $table->string("title");
            $table->string("desc");
            $table->string("date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
