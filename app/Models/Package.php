<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PackageTiming;
use App\Models\Favourite;

use Eastwest\Json\Json;
use Eastwest\Json\JsonException;
use Illuminate\Support\Facades\Auth;

class Package extends Model
{
    use HasFactory;

    public function amountExplode($price)
    {
        $price = explode(' - ', $price);
        $amount['min'] = intval(substr($price[0], 1));
        $amount['max'] = intval(substr($price[1], 1));

        return $amount;

    }

    public function getimage()
    {
        $images = json_decode($this->logo);
        return $images[0];
    }
    public function getAllimage()
    {
        $images = json_decode($this->logo);
        return $images;
    }

    public function pkgtime()
    {
        return $this->hasMany(PackageTiming::class, 'package_id', 'id');
    }

    public function favourite()
    {
        if (auth()->user()) {
            return $this->hasOne(Favourite::class, 'pakgresttid', 'id')->where('parent', 'package')->where('user_id',Auth::id());
        }
    }

    public function favouriteauth()
    {
        if (auth()->user()) {
            return $this->hasOne(Favourite::class, 'pakgresttid', 'id')->where('parent', 'package')->where('user_id', auth()->user()->id);

        }
    }

    public function tags()
    {
        return $this->hasMany(PackageTags::class, 'package_id');
    }

    public function resturent()
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id');
    }

}
