<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slogan',
        'primary_color',
        'is_decimal',
        'decimal_separator',
        'currency_direction',
        'thousand_separator',
        'logo_main_light',
        'logo_main_dark',
        'logo_sm_light',
        'logo_sm_dark',
        'favicon',
        'loader',
        'is_loader',
        'meta_keywords',
        'meta_description',
        'facebook_check',
        'facebook_client_id',
        'facebook_client_secret',
        'facebook_redirect',
        'google_check',
        'google_client_id',
        'google_client_secret',
        'google_redirect',
        'google_analytics_id',
        'smtp_check',
        'email_host',
        'email_port',
        'email_encryption',
        'email_user',
        'email_pass',
        'email_from',
        'email_from_name',
        'contact_email',
        'is_twilio',
        'twilio_sid',
        'twilio_token',
        'twilio_form_number',
        'twilio_country_code',
        'twilio_section',
        'is_google_analytics',
        'google_analytics',
        'is_google_adsense',
        'google_adsense',
        'is_recaptcha',
        'google_recaptcha_site_key',
        'google_recaptcha_secret_key',
        'is_facebook_pixel',
        'facebook_pixel',
        'is_facebook_messenger',
        'facebook_messenger',
        'is_disqus',
        'disqus',
        'is_cookie',
        'cookie_text',
        'copy_right',
        'is_two_factor',
        'theme',
        'version',
    ];

    protected $keyType = 'bigint';
}
