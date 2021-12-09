<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  CREATE TABLE notifications (
    //     notification_id INT GENERATED ALWAYS AS IDENTITY,
    //     notification_is_read boolean DEFAULT false,
    //     notification_message_id INT,
    //     PRIMARY KEY(notification_id),
    //     CONSTRAINT fk_notification_message
    //     FOREIGN KEY(notification_message_id) 
    //     REFERENCES messages(message_id)
    // );

    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('notification_id');
            $table->boolean('notification_is_read');
            $table->integer('notification_message_id');
            $table->timestamps();

            $table->primary('notification_id');

            $table->foreign('notification_message_id')->references('message_id')->on('messages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notifications');
    }
}
