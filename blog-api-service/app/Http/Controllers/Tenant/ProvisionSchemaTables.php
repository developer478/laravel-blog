<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;

class ProvisionSchemaTables extends Controller
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up($prefix)
    {

        Schema::create($prefix.'_customer', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email', 64)->unique();
            $table->text('address')->nullable();
            $table->timestamps();
        });

        Schema::create($prefix.'_subscription', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->date('date');
            $table->date('exp_date');
            $table->text('status');
            $table->timestamps();
        });

        Schema::create($prefix.'_blog_post', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('post_id');
            $table->string('slug');
            $table->text('description');
            $table->text('status');
            $table->timestamps();
        });

        Schema::create($prefix.'_blog_post_category', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('status');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down($prefix)
    {
        Schema::dropIfExists($prefix.'_customer');
        Schema::dropIfExists($prefix.'_subscription');
        Schema::dropIfExists($prefix.'_blog_post');
        Schema::dropIfExists($prefix.'_blog_post_category');
    }
}
