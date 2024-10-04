<?php

use App\Helpers\AppHelpers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_admin')->default(0);
            $table->string('name');
            $table->string('photo', 255)->nullable();
            $table->string('email')->unique();
            $table->string('phone', 60)->nullable();
            $table->string('phone_national', 30)->nullable();
            $table->string('phone_country', 2)->nullable();
            $table->boolean('phone_hidden')->default(0);
            $table->string('email_token', 32)->nullable();
            $table->string('phone_token', 32)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->enum('auth_field', ['email', 'phone'])->default('email');
            $table->string('provider', 50)->nullable()->comment('facebook, google, twitter, linkedin, ...');
            $table->string('provider_id', 50)->nullable()->comment('Provider User ID');
            $table->string('password');
            $table->string('country_code', 2)->nullable();
            $table->string('language_code', 10)->nullable();
            $table->string('time_zone', 50)->nullable();
            $table->boolean('dark_mode')->default(0);
            $table->boolean('blocked')->default(0);
            $table->dateTime('last_login_at')->nullable();
            $table->string('latest_update_ip', 50)->nullable()->comment('Latest update IP address');
            $table->string('create_from_ip', 50)->nullable()->comment('IP address of creation');
            $table->rememberToken();
            $table->timestamps();
        });

        AppHelpers::createSuperAdmin();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
