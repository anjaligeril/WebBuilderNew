<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name');
            $table->string('product_description');
            $table->int('price');
            $table->int('compare_at_price');
            $table->int('cost_per_item');
            $table->boolean('charge_tax');
            $table->string('sku');
            $table->string('barcode');
            $table->string('inventory policy');
            $table->int('quantity');
            $table->string('out_of_stock');
            $table->boolean('physical_product');
            $table->string('weight');
            $table->string('country_of_origin');
            $table->string('hs_code');
            $table->boolean('variants');
            $table->string('option_name');
            $table->string('option_value');
            $table->boolean('seo_listing');
            $table->string('page_title');
            $table->string('meta_description');
            $table->string('url&handle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
