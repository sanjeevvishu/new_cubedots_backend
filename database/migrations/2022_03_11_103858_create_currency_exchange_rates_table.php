<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyExchangeRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency_exchange_rates', function (Blueprint $table) {
            $table->id();

            $table->string("base",45);
            $table->double("AED")->default(0);
            $table->double("AFN")->default(0);
            $table->double("ALL")->default(0);
            $table->double("AMD")->default(0);
            $table->double("ANG")->default(0);
            $table->double("AOA")->default(0);
            $table->double("ARS")->default(0);
            $table->double("AUD")->default(0);
            $table->double("AWG")->default(0);
            $table->double("AZN")->default(0);
            $table->double("BAM")->default(0);
            $table->double("BBD")->default(0);
            $table->double("BDT")->default(0);
            $table->double("BGN")->default(0);
            $table->double("BHD")->default(0);
            $table->double("BIF")->default(0);
            $table->double("BMD")->default(0);
            $table->double("BND")->default(0);
            $table->double("BOB")->default(0);
            $table->double("BRL")->default(0);
            $table->double("BSD")->default(0);
            $table->double("BTC")->default(0);
            $table->double("BTN")->default(0);
            $table->double("BWP")->default(0);
            $table->double("BYN")->default(0);
            $table->double("BZD")->default(0);
            $table->double("CAD")->default(0);
            $table->double("CDF")->default(0);
            $table->double("CHF")->default(0);
            $table->double("CLF")->default(0);
            $table->double("CLP")->default(0);
            $table->double("CNH")->default(0);
            $table->double("CNY")->default(0);
            $table->double("COP")->default(0);
            $table->double("CRC")->default(0);
            $table->double("CUC")->default(0);
            $table->double("CUP")->default(0);
            $table->double("CVE")->default(0);
            $table->double("CZK")->default(0);
            $table->double("DJF")->default(0);
            $table->double("DKK")->default(0);
            $table->double("DOP")->default(0);
            $table->double("DZD")->default(0);
            $table->double("EGP")->default(0);
            $table->double("ERN")->default(0);
            $table->double("ETB")->default(0);
            $table->double("EUR")->default(0);
            $table->double("FJD")->default(0);
            $table->double("FKP")->default(0);
            $table->double("GBP")->default(0);
            $table->double("GEL")->default(0);
            $table->double("GGP")->default(0);
            $table->double("GHS")->default(0);
            $table->double("GIP")->default(0);
            $table->double("GMD")->default(0);
            $table->double("GNF")->default(0);
            $table->double("GTQ")->default(0);
            $table->double("GYD")->default(0);
            $table->double("HKD")->default(0);
            $table->double("HNL")->default(0);
            $table->double("HRK")->default(0);
            $table->double("HTG")->default(0);
            $table->double("HUF")->default(0);
            $table->double("IDR")->default(0);
            $table->double("ILS")->default(0);
            $table->double("IMP")->default(0);
            $table->double("INR")->default(0);
            $table->double("IQD")->default(0);
            $table->double("IRR")->default(0);
            $table->double("ISK")->default(0);
            $table->double("JEP")->default(0);
            $table->double("JMD")->default(0);
            $table->double("JOD")->default(0);
            $table->double("JPY")->default(0);
            $table->double("KES")->default(0);
            $table->double("KGS")->default(0);
            $table->double("KHR")->default(0);
            $table->double("KMF")->default(0);
            $table->double("KPW")->default(0);
            $table->double("KRW")->default(0);
            $table->double("KWD")->default(0);
            $table->double("KYD")->default(0);
            $table->double("KZT")->default(0);
            $table->double("LAK")->default(0);
            $table->double("LBP")->default(0);
            $table->double("LKR")->default(0);
            $table->double("LRD")->default(0);
            $table->double("LSL")->default(0);
            $table->double("LYD")->default(0);
            $table->double("MAD")->default(0);
            $table->double("MDL")->default(0);
            $table->double("MGA")->default(0);
            $table->double("MKD")->default(0);
            $table->double("MMK")->default(0);
            $table->double("MNT")->default(0);
            $table->double("MOP")->default(0);
            $table->double("MRU")->default(0);
            $table->double("MUR")->default(0);
            $table->double("MVR")->default(0);
            $table->double("MWK")->default(0);
            $table->double("MXN")->default(0);
            $table->double("MYR")->default(0);
            $table->double("MZN")->default(0);
            $table->double("NAD")->default(0);
            $table->double("NGN")->default(0);
            $table->double("NIO")->default(0);
            $table->double("NOK")->default(0);
            $table->double("NPR")->default(0);
            $table->double("NZD")->default(0);
            $table->double("OMR")->default(0);
            $table->double("PAB")->default(0);
            $table->double("PEN")->default(0);
            $table->double("PGK")->default(0);
            $table->double("PHP")->default(0);
            $table->double("PKR")->default(0);
            $table->double("PLN")->default(0);
            $table->double("PYG")->default(0);
            $table->double("QAR")->default(0);
            $table->double("RON")->default(0);
            $table->double("RSD")->default(0);
            $table->double("RUB")->default(0);
            $table->double("RWF")->default(0);
            $table->double("SAR")->default(0);
            $table->double("SBD")->default(0);
            $table->double("SCR")->default(0);
            $table->double("SDG")->default(0);
            $table->double("SEK")->default(0);
            $table->double("SGD")->default(0);
            $table->double("SHP")->default(0);
            $table->double("SLL")->default(0);
            $table->double("SOS")->default(0);
            $table->double("SRD")->default(0);
            $table->double("SSP")->default(0);
            $table->double("STD")->default(0);
            $table->double("STN")->default(0);
            $table->double("SVC")->default(0);
            $table->double("SYP")->default(0);
            $table->double("SZL")->default(0);
            $table->double("THB")->default(0);
            $table->double("TJS")->default(0);
            $table->double("TMT")->default(0);
            $table->double("TND")->default(0);
            $table->double("TOP")->default(0);
            $table->double("TRY")->default(0);
            $table->double("TTD")->default(0);
            $table->double("TWD")->default(0);
            $table->double("TZS")->default(0);
            $table->double("UAH")->default(0);
            $table->double("UGX")->default(0);
            $table->double("USD")->default(0);
            $table->double("UYU")->default(0);
            $table->double("UZS")->default(0);
            $table->double("VES")->default(0);
            $table->double("VND")->default(0);
            $table->double("VUV")->default(0);
            $table->double("WST")->default(0);
            $table->double("XAF")->default(0);
            $table->double("XAG")->default(0);
            $table->double("XAU")->default(0);
            $table->double("XCD")->default(0);
            $table->double("XDR")->default(0);
            $table->double("XOF")->default(0);
            $table->double("XPD")->default(0);
            $table->double("XPF")->default(0);
            $table->double("XPT")->default(0);
            $table->double("YER")->default(0);
            $table->double("ZAR")->default(0);
            $table->double("ZMW")->default(0);
            $table->double("ZWL")->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency_exchange_rates');
    }
}
