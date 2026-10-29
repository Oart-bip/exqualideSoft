<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up():void{Schema::create('orders',function(Blueprint $t){$t->id();$t->foreignId('customer_id')->constrained();$t->foreignId('product_id')->constrained();$t->unsignedInteger('quantity');$t->string('status');$t->timestamps();});} public function down():void{Schema::dropIfExists('orders');}};
