<?php

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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slogan')->nullable();
            $table->string('primary_color')->nullable();
            $table->tinyInteger('is_decimal')->default(1);
            $table->string('decimal_separator')->default('.');
            $table->tinyInteger('currency_direction')->default(1);
            $table->string('thousand_separator')->default(',');
            $table->string('logo_main_light')->nullable();
            $table->string('logo_main_dark')->nullable();
            $table->string('logo_sm_light')->nullable();
            $table->string('logo_sm_dark')->nullable();
            $table->string('favicon')->nullable();
            $table->string('loader')->nullable();
            $table->tinyInteger('is_loader')->default(1);
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->tinyInteger('facebook_check')->default(1);
            $table->string('facebook_client_id')->nullable();
            $table->string('facebook_client_secret')->nullable();
            $table->string('facebook_redirect')->nullable();
            $table->tinyInteger('google_check')->default(1);
            $table->string('google_client_id')->nullable();
            $table->string('google_client_secret')->nullable();
            $table->string('google_redirect')->nullable();
            $table->string('google_analytics_id')->nullable();
            $table->tinyInteger('smtp_check')->default(0);
            $table->string('email_host')->nullable();
            $table->string('email_port')->nullable();
            $table->string('email_encryption')->nullable();
            $table->string('email_user')->nullable();
            $table->string('email_pass')->nullable();
            $table->string('email_from')->nullable();
            $table->string('email_from_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->tinyInteger('is_twilio')->default(0);
            $table->string('twilio_sid')->nullable();
            $table->string('twilio_token')->nullable();
            $table->string('twilio_form_number')->nullable();
            $table->string('twilio_country_code')->nullable();
            $table->text('twilio_section')->nullable();
            $table->tinyInteger('is_google_analytics')->default(0);
            $table->text('google_analytics')->nullable();
            $table->tinyInteger('is_google_adsense')->default(0);
            $table->text('google_adsense')->nullable();
            $table->tinyInteger('is_recaptcha')->default(0);
            $table->string('google_recaptcha_site_key')->nullable();
            $table->string('google_recaptcha_secret_key')->nullable();
            $table->tinyInteger('is_facebook_pixel')->default(0);
            $table->text('facebook_pixel')->nullable();
            $table->tinyInteger('is_facebook_messenger')->default(0);
            $table->text('facebook_messenger')->nullable();
            $table->tinyInteger('is_disqus')->default(0);
            $table->text('disqus')->nullable();
            $table->tinyInteger('is_cookie')->default(1);
            $table->string('cookie_text')->nullable();
            $table->string('copy_right')->nullable();
            $table->tinyInteger('is_two_factor')->default(0);
            $table->string('theme')->nullable();
            $table->string('version')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
