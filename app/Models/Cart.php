<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\CartItem;

class Cart extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }
  
};
