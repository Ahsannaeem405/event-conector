<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class booking extends Model
{
    use HasFactory;

    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function owner(){
        return $this->belongsTo(User::class,'owner_id');
    }

    public function setEventDateAttribute($val)
    {

        $this->attributes['event_date'] = Carbon::parse($val)->format('Y-m-d');
    }
    public function checkStatus()
    {
        $danger=array('pending','canceled');
        if (in_array($this->status,$danger)){
            return true;
        }
        else{
            return false;
        }
    }

    public function getUser(){

        if (Auth::id()==2)
        {
          return  $this->user;
        }
        else{
            return  $this->owner;
        }
    }
}
