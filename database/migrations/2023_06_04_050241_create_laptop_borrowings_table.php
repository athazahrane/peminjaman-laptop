<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopBorrowingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop_borrowings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('laptop_id');
            $table->unsignedBigInteger('borrower_id');
            $table->timestamp('borrowed_at');
            $table->timestamp('returned_at')->nullable();
            $table->timestamps();

            $table->foreign('laptop_id')->references('id')->on('laptops')->onDelete('cascade');
            $table->foreign('borrower_id')->references('id')->on('borrowers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptop_borrowings');
    }
}
