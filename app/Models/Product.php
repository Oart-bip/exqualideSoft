<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model { protected $fillable=['name','category','price','stock','minimum_stock']; protected $casts=['price'=>'decimal:2']; public function getLowStockAttribute(): bool { return $this->stock <= $this->minimum_stock; } }
