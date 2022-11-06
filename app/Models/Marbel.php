<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marbel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function rel_to_cat(){
        return $this->belongsTo(CategoryAdd::class, 'category_id');
    }

    function rel_to_catroom(){
        return $this->belongsTo(CategoryRoom::class, 'mcat_room_id');
    }

}
