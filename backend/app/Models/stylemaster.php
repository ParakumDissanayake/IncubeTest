<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stylemaster extends Model
{
    protected $fillable = [
        'style_code','style_name','style_quantity','style_status','style_type'
    ];
}
