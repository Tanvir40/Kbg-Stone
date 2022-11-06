<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryRoom extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function rel_to_user(){
        return $this->belongsto(user::class, 'user_id');
    }

}
