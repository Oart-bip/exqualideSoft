<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up():void{Schema::create('products',function(Blueprint $t){$t->id();$t->string('name');$t->string('category');$t->decimal('price',10,2);$t->unsignedInteger('stock');$t->unsignedInteger('minimum_stock');$t->timestamps();});} public function down():void{Schema::dropIfExists('products');}};
