<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function option()
    {
        return $this->belongsToMany(Option::class)->withPivot('description','id')->using(OptionProduct::class);
    }


}
