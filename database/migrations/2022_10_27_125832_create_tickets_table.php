<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_title')->nullable();
            $table->string('ticket_event_id')->nullable();
            $table->string('ticket_price')->nullable();
            $table->text('ticket_description')->nullable(); 
            $table->string('ticket_status')->nullable();
            $table->string('ticket_date')->nullable();
            $table->string('ticket_duration')->nullable();
            $table->string('ticket_time')->nullable();
            $table->string('ticket_seatnumber')->nullable();
            $table->string('ticket_country')->nullable();
            $table->string('ticket_address')->nullable();
            $table->string('ticket_remark')->nullable();
            $table->text('final')->nullable(); 
            $table->string('ticket_image')->nullable();
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
