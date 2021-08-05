<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('date');
            $table->unsignedInteger('sales_person_id');
            $table->foreign('sales_person_id')->references('id')->on('sales_persons')->onDelete('cascade');
            $table->enum('status', ['1','2','3','4','5','6','7','8','9','10','11','12','13'])->comment("1 => 'New', 2 => 'Open', 3 => 'Active', 4 => 'In progress', 5 => 'Open deal', 6 => 'Unqualified', 7 => 'Attempted to contact', 8 => 'Follow up', 9 => 'Connected', 10 => 'On Board', 11 => 'Bad timing', 12 => 'Close', 13 => 'Dead'");
            $table->unsignedInteger('campaign_id');
            $table->foreign('campaign_id')->references('id')->on('campaigns')->onDelete('cascade');
            $table->enum('type', ['smm','em'])->comment("'smm' => 'Social Media Marketing', 'em' => 'Email Marketing'");
            $table->string('business_name',50)->nullable();
            $table->string('respondent_name',50)->nullable();
            $table->string('email',50)->nullable();
            $table->mediumInteger('dial_code');
            $table->string('contact_no',20)->nullable();
            $table->string('iso',2);
            $table->mediumInteger('other_dial_code');
            $table->string('other_contact_no',20)->nullable();
            $table->string('other_iso',2);
            $table->string('fax',20)->nullable();
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
        Schema::dropIfExists('leads');
    }
}
