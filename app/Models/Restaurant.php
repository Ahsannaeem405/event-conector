<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Timing;
class Restaurant extends Model
{
    use HasFactory;
    public function time()
    {
        return $this->hasMany(Timing::class, 'restaurant_id', 'id');
    }
}
