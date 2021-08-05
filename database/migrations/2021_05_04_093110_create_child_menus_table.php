<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_menus', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('display_name',50);
            $table->string('file_name',50);
            $table->string('user_right_title',50)->nullable();
            $table->string('action',150)->nullable();
            $table->mediumInteger('sort_by');
            $table->enum('status', ['0','1'])->comment("'0' => 'Inactive','1' => 'Active'")->default('1');
            $table->enum('menu_link', ['0','1'])->comment("'0' => 'Not Display','1' => 'Display'")->default('1');
            $table->unsignedInteger('main_menu_id');
            $table->foreign('main_menu_id')->references('id')->on('main_menus')->onDelete('cascade');
            $table->unsignedInteger('sub_menu_id');
            $table->foreign('sub_menu_id')->references('id')->on('sub_menus')->onDelete('cascade');
            $table->unsignedInteger('added_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_menus');
    }
}
