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

    public function getResturentdata($id)
    {
     $res=$this->wherePlannerId($id)->count();
     return ['resturent'=>$res];
    }

    public function package()
    {
        return $this->hasMany(Package::class,'restaurant_id');
    }

    public function favouriterest()
    {
        return $this->hasOne(Favourite::class, 'pakgresttid', 'id')->where('parent', 'restaurant');
    }

    public function category(){
        return $this->belongsTo(Category::class,'categoryid');
    }
}
