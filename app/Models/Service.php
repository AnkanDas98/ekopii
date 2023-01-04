<?php

namespace App\Models;

use App\Models\ServiceFeature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function feature(){
      return $this->hasMany(ServiceFeature::class);
    }
}
