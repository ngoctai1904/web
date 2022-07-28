<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('thumbnail');
            $table->integer('price');
            $table->integer('discount')->nullable();
            $table->integer('amount');
            $table->integer('view')->default(0);
            $table->longText('overview');
            $table->integer('since');
            $table->unsignedBigInteger('author_id');
            // Lay author_id nay lien ket toi id trong bang authors
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            // tao ra truong (category_id)
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
