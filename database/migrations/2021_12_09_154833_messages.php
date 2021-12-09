<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  CREATE TABLE messages(
    //     message_id INT GENERATED ALWAYS AS IDENTITY,
    //     user_id_to INT,
    //     user_id_from INT,
    //     message_body VARCHAR(255) NOT NULL,
    //     PRIMARY KEY(message_id),
    //     CONSTRAINT fk_user_to
    //         FOREIGN KEY(user_id_to) 
    //         REFERENCES users(user_id),
    //     CONSTRAINT fk_user_from
    //         FOREIGN KEY(user_id_from) 
    //         REFERENCES users(user_id)
    //     );

    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id('message_id');
            $table->integer('user_id_to');
            $table->integer('user_id_from');
            $table->string('message_body');
            $table->timestamps();
            $table->foreign('user_id_to')->references('users')->on('user_id');
            $table->foreign('fk_user_from')->references('users')->on('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
    }
}
