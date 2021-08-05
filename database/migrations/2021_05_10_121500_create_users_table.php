<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->bigInteger('employee_code');
            $table->enum('title', ['sir','dr','prof','mr','mrs','miss'])->comment("'sir'=>'Sir.','dr'=>'Dr.','prof'=>'Prof.','mr'=>'Mr.','mrs'=>'Mrs.','miss'=>'Miss.'")->default('sir');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('pseudo_name',50)->nullable();
            $table->enum('gender', ['m','f','o'])->comment("'m'=>'Male','f'=>'Female','o'=>'Other'")->default('m');
            $table->string('email',50)->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('status', ['0','1','2','3','4','5','6','7'])->comment("'0' => 'Pending', '1' => 'Activated', '2' => 'Deactivated','3' => 'Suspended','4' => 'Suspended by admin','5' => 'Blocked','6' => 'Blocked by admin','7' => 'Deleted'")->default('0');
            $table->enum('type', ['1','2','3','4','5'])->comment("'1' => 'Super Admin', '2' => 'Admin', '3' => 'Manager (HR)', '4' => 'Supervisor','5' => 'Resource'")->default('5');
            $table->unsignedInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->unsignedInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->unsignedInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->unsignedInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->unsignedInteger('branch_id');
            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->unsignedInteger('added_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->unsignedInteger('deleted_by')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('users');
    }
}
