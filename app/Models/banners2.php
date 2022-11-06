<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banners2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'bannername',
        'bannerimage',
        'created_at',
        'updated_at',
    ];
}
