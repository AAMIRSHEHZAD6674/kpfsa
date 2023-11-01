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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)
                ->constrained();
            $table->string('mobile_no');
            $table->string('alternate_phone_no');
            $table->string('cnic');
            $table->enum('gender',['male','female']);
            $table->date('date_of_birth');
            $table->enum('marital_status',['married','single']);
            $table->string('father_name');
            $table->string('spouse_name');
            $table->string('spouse_cnic');
            $table->bigInteger('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};