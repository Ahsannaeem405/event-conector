<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function getCreatedATAttribute($val)
    {
        return Carbon::parse($val)->format('h:i A');
    }
}
