<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('users')){
            Schema::table('users', function(Blueprint $table)
            {
                $table->string('active_key')->after('password')->nullable();
                $table->string('active')->after('password')->nullable();
                $table->text('hobby')->after('password')->nullable();
                $table->text('habit')->after('password')->nullable();
                $table->string('address')->after('password')->nullable();
                $table->integer('district')->after('password')->nullable();
                $table->integer('city')->after('password')->nullable();
                $table->string('phone')->after('password')->nullable();
                $table->dateTime('birthday')->after('password')->nullable();
                $table->dateTime('avatar_img')->after('password')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
