<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Shipment extends Model { protected $fillable=['order_id','address','fee','expected_date','tracking_code','status']; public function order(){return $this->belongsTo(Order::class);} }
