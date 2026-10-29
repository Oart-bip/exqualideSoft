<?php
use Illuminate\Database\Migrations\Migration; use Illuminate\Database\Schema\Blueprint; use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up():void{Schema::create('shipments',function(Blueprint $t){$t->id();$t->foreignId('order_id')->constrained();$t->text('address');$t->decimal('fee',10,2);$t->date('expected_date');$t->string('tracking_code');$t->string('status');$t->timestamps();});} public function down():void{Schema::dropIfExists('shipments');}};
