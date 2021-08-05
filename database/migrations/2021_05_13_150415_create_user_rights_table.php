<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_rights', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('main_menu_id');
            $table->foreign('main_menu_id')->references('id')->on('main_menus')->onDelete('cascade');
            $table->unsignedInteger('sub_menu_id');
            $table->foreign('sub_menu_id')->references('id')->on('sub_menus')->onDelete('cascade');
            $table->unsignedInteger('child_menu_id');
            $table->foreign('child_menu_id')->references('id')->on('child_menus')->onDelete('cascade');
            $table->string('action',50);
            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->unsignedInteger('branch_id');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->unsignedInteger('added_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_rights');
    }
}
