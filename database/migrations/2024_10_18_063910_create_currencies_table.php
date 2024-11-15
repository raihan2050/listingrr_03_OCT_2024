<?php

use App\Models\Currency;
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
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('country', 100);
            $table->string('currency', 100);
            $table->string('code', 25);
            $table->string('symbol', 25);
            $table->string('thousand_separator', 10);
            $table->string('decimal_separator', 10);
            $table->tinyInteger('is_default')->default(0);
            $table->timestamps(0);
        });

        $currencies = array(
            array('Albania', 'Leke', 'ALL', 'Lek', ',', '.', 0),
            array('America', 'Dollars', 'USD', '$', ',', '.', 1),
            array('Afghanistan', 'Afghanis', 'AF', '؋', ',', '.', 0),
            array('Argentina', 'Pesos', 'ARS', '$', ',', '.', 0),
            array('Aruba', 'Guilders', 'AWG', 'ƒ', ',', '.', 0),
            array('Australia', 'Dollars', 'AUD', '$', ',', '.', 0),
            array('Azerbaijan', 'New Manats', 'AZ', 'ман', ',', '.', 0),
            array('Bahamas', 'Dollars', 'BSD', '$', ',', '.', 0),
            array('Barbados', 'Dollars', 'BBD', '$', ',', '.', 0),
            array('Belarus', 'Rubles', 'BYR', 'p.', ',', '.', 0),
            array('Belgium', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Beliz', 'Dollars', 'BZD', 'BZ$', ',', '.', 0),
            array('Bermuda', 'Dollars', 'BMD', '$', ',', '.', 0),
            array('Bolivia', 'Bolivianos', 'BOB', '$b', ',', '.', 0),
            array('Bosnia and Herzegovina', 'Convertible Marka', 'BAM', 'KM', ',', '.', 0),
            array('Botswana', 'Pula\'s', 'BWP', 'P', ',', '.', 0),
            array('Bulgaria', 'Leva', 'BG', 'лв', ',', '.', 0),
            array('Brazil', 'Reais', 'BRL', 'R$', ',', '.', 0),
            array('Britain [United Kingdom]', 'Pounds', 'GBP', '£', ',', '.', 0),
            array('Brunei Darussalam', 'Dollars', 'BND', '$', ',', '.', 0),
            array('Cambodia', 'Riels', 'KHR', '៛', ',', '.', 0),
            array('Canada', 'Dollars', 'CAD', '$', ',', '.', 0),
            array('Cayman Islands', 'Dollars', 'KYD', '$', ',', '.', 0),
            array('Chile', 'Pesos', 'CLP', '$', ',', '.', 0),
            array('China', 'Yuan Renminbi', 'CNY', '¥', ',', '.', 0),
            array('Colombia', 'Pesos', 'COP', '$', ',', '.', 0),
            array('Costa Rica', 'Colón', 'CRC', '₡', ',', '.', 0),
            array('Croatia', 'Kuna', 'HRK', 'kn', ',', '.', 0),
            array('Cuba', 'Pesos', 'CUP', '₱', ',', '.', 0),
            array('Cyprus', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Czech Republic', 'Koruny', 'CZK', 'Kč', ',', '.', 0),
            array('Denmark', 'Kroner', 'DKK', 'kr', ',', '.', 0),
            array('Dominican Republic', 'Pesos', 'DOP ', 'RD$', ',', '.', 0),
            array('East Caribbean', 'Dollars', 'XCD', '$', ',', '.', 0),
            array('Egypt', 'Pounds', 'EGP', '£', ',', '.', 0),
            array('El Salvador', 'Colones', 'SVC', '$', ',', '.', 0),
            array('England [United Kingdom]', 'Pounds', 'GBP', '£', ',', '.', 0),
            array('Euro', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Falkland Islands', 'Pounds', 'FKP', '£', ',', '.', 0),
            array('Fiji', 'Dollars', 'FJD', '$', ',', '.', 0),
            array('France', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Ghana', 'Cedis', 'GHS', '¢', ',', '.', 0),
            array('Gibraltar', 'Pounds', 'GIP', '£', ',', '.', 0),
            array('Greece', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Guatemala', 'Quetzales', 'GTQ', 'Q', ',', '.', 0),
            array('Guernsey', 'Pounds', 'GGP', '£', ',', '.', 0),
            array('Guyana', 'Dollars', 'GYD', '$', ',', '.', 0),
            array('Holland [Netherlands]', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Honduras', 'Lempiras', 'HNL', 'L', ',', '.', 0),
            array('Hong Kong', 'Dollars', 'HKD', '$', ',', '.', 0),
            array('Hungary', 'Forint', 'HUF', 'Ft', ',', '.', 0),
            array('Iceland', 'Kronur', 'ISK', 'kr', ',', '.', 0),
            array('India', 'Rupees', 'INR', '₹', ',', '.', 0),
            array('Indonesia', 'Rupiahs', 'IDR', 'Rp', ',', '.', 0),
            array('Iran', 'Rials', 'IRR', '﷼', ',', '.', 0),
            array('Ireland', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Isle of Man', 'Pounds', 'IMP', '£', ',', '.', 0),
            array('Israel', 'New Shekels', 'ILS', '₪', ',', '.', 0),
            array('Italy', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Jamaica', 'Dollars', 'JMD', 'J$', ',', '.', 0),
            array('Japan', 'Yen', 'JPY', '¥', ',', '.', 0),
            array('Jersey', 'Pounds', 'JEP', '£', ',', '.', 0),
            array('Kazakhstan', 'Tenge', 'KZT', 'лв', ',', '.', 0),
            array('Korea [North]', 'Won', 'KPW', '₩', ',', '.', 0),
            array('Korea [South]', 'Won', 'KRW', '₩', ',', '.', 0),
            array('Kyrgyzstan', 'Soms', 'KGS', 'лв', ',', '.', 0),
            array('Laos', 'Kips', 'LAK', '₭', ',', '.', 0),
            array('Latvia', 'Lati', 'LVL', 'Ls', ',', '.', 0),
            array('Lebanon', 'Pounds', 'LBP', '£', ',', '.', 0),
            array('Liberia', 'Dollars', 'LRD', '$', ',', '.', 0),
            array('Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF', ',', '.', 0),
            array('Lithuania', 'Litai', 'LTL', 'Lt', ',', '.', 0),
            array('Luxembourg', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Macedonia', 'Denars', 'MKD', 'ден', ',', '.', 0),
            array('Malaysia', 'Ringgits', 'MYR', 'RM', ',', '.', 0),
            array('Malta', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Mauritius', 'Rupees', 'MUR', '₨', ',', '.', 0),
            array('Mexico', 'Pesos', 'MXN', '$', ',', '.', 0),
            array('Mongolia', 'Tugriks', 'MNT', '₮', ',', '.', 0),
            array('Mozambique', 'Meticais', 'MZ', 'MT', ',', '.', 0),
            array('Namibia', 'Dollars', 'NAD', '$', ',', '.', 0),
            array('Nepal', 'Rupees', 'NPR', '₨', ',', '.', 0),
            array('Netherlands Antilles', 'Guilders', 'ANG', 'ƒ', ',', '.', 0),
            array('Netherlands', 'Euro', 'EUR', '€', ',', '.', 0),
            array('New Zealand', 'Dollars', 'NZD', '$', ',', '.', 0),
            array('Nicaragua', 'Cordobas', 'NIO', 'C$', ',', '.', 0),
            array('Nigeria', 'Nairas', 'NGN', '₦', ',', '.', 0),
            array('North Korea', 'Won', 'KPW', '₩', ',', '.', 0),
            array('Norway', 'Krone', 'NOK', 'kr', ',', '.', 0),
            array('Oman', 'Rials', 'OMR', '﷼', ',', '.', 0),
            array('Pakistan', 'Rupees', 'PKR', '₨', ',', '.', 0),
            array('Panama', 'Balboa', 'PAB', 'B/.', ',', '.', 0),
            array('Paraguay', 'Guarani', 'PYG', 'Gs', ',', '.', 0),
            array('Peru', 'Nuevos Soles', 'PE', 'S/.', ',', '.', 0),
            array('Philippines', 'Pesos', 'PHP', 'Php', ',', '.', 0),
            array('Poland', 'Zlotych', 'PL', 'zł', ',', '.', 0),
            array('Qatar', 'Rials', 'QAR', '﷼', ',', '.', 0),
            array('Romania', 'New Lei', 'RO', 'lei', ',', '.', 0),
            array('Russia', 'Rubles', 'RUB', 'руб', ',', '.', 0),
            array('Saint Helena', 'Pounds', 'SHP', '£', ',', '.', 0),
            array('Saudi Arabia', 'Riyals', 'SAR', '﷼', ',', '.', 0),
            array('Serbia', 'Dinars', 'RSD', 'Дин.', ',', '.', 0),
            array('Seychelles', 'Rupees', 'SCR', '₨', ',', '.', 0),
            array('Singapore', 'Dollars', 'SGD', '$', ',', '.', 0),
            array('Slovenia', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Solomon Islands', 'Dollars', 'SBD', '$', ',', '.', 0),
            array('Somalia', 'Shillings', 'SOS', 'S', ',', '.', 0),
            array('South Africa', 'Rand', 'ZAR', 'R', ',', '.', 0),
            array('South Korea', 'Won', 'KRW', '₩', ',', '.', 0),
            array('Spain', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Sri Lanka', 'Rupees', 'LKR', '₨', ',', '.', 0),
            array('Sweden', 'Kronor', 'SEK', 'kr', ',', '.', 0),
            array('Switzerland', 'Francs', 'CHF', 'CHF', ',', '.', 0),
            array('Suriname', 'Dollars', 'SRD', '$', ',', '.', 0),
            array('Syria', 'Pounds', 'SYP', '£', ',', '.', 0),
            array('Taiwan', 'New Dollars', 'TWD', 'NT$', ',', '.', 0),
            array('Thailand', 'Baht', 'THB', '฿', ',', '.', 0),
            array('Trinidad and Tobago', 'Dollars', 'TTD', 'TT$', ',', '.', 0),
            array('Turkey', 'Lira', 'TRY', 'TL', ',', '.', 0),
            array('Turkey', 'Liras', 'TRL', '£', ',', '.', 0),
            array('Tuvalu', 'Dollars', 'TVD', '$', ',', '.', 0),
            array('Ukraine', 'Hryvnia', 'UAH', '₴', ',', '.', 0),
            array('United Kingdom', 'Pounds', 'GBP', '£', ',', '.', 0),
            array('United States of America', 'Dollars', 'USD', '$', ',', '.', 0),
            array('Uruguay', 'Pesos', 'UYU', '$U', ',', '.', 0),
            array('Uzbekistan', 'Sums', 'UZS', 'лв', ',', '.', 0),
            array('Vatican City', 'Euro', 'EUR', '€', ',', '.', 0),
            array('Venezuela', 'Bolivares Fuertes', 'VEF', 'Bs', ',', '.', 0),
            array('Vietnam', 'Dong', 'VND', '₫', ',', '.', 0),
            array('Yemen', 'Rials', 'YER', '﷼', ',', '.', 0),
            array('Zimbabwe', 'Zimbabwe Dollars', 'ZWD', 'Z$', ',', '.', 0),
            array('Iraq', 'Iraqi dinar', 'IQD', 'د.ع', ',', '.', 0),
            array('Kenya', 'Kenyan shilling', 'KES', 'KSh', ',', '.', 0),
            array('Bangladesh', 'Taka', 'BDT', '৳', ',', '.', 0),
            array('Algerie', 'Algerian dinar', 'DZD', 'د.ج', ',', '.', 0),
            array('United Arab Emirates', 'United Arab Emirates dirham', 'AED', 'د.إ', ',', '.', 0),
            array('Uganda', 'Uganda shillings', 'UGX', 'USh', ',', '.', 0),
            array('Tanzania', 'Tanzanian shilling', 'TZS', 'TSh', ',', '.', 0),
            array('Angola', 'Kwanza', 'AOA', 'Kz', ',', '.', 0),
            array('Kuwait', 'Kuwaiti dinar', 'KWD', 'KD', ',', '.', 0),
            array('Bahrain', 'Bahraini dinar', 'BHD', 'BD', ',', '.', 0)
          );

          foreach ($currencies as $key => $currency) {
            Currency::firstOrCreate([
                'country' => $currency[0],
                'currency' => $currency[1],
                'code' => $currency[2],
            ], [
                'symbol' => $currency[3],
                'thousand_separator' => $currency[4],
                'decimal_separator' => $currency[5],
                'is_default' => $currency[6],
            ]);
          }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('currencies');
    }
};
