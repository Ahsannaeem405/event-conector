<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PackageTiming;

use Eastwest\Json\Json;
use Eastwest\Json\JsonException;

class Package extends Model
{
    use HasFactory;
    public function getimage()
    {
        $images = json_decode($this->logo);
        return $images[0];
    }

    public function pkgtime()
    {
        return $this->hasMany(PackageTiming::class, 'package_id', 'id');
    }
}
