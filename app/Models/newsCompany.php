<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prevew_text',
        'prevew_img',
        'detile_text',
        'detile_img',
        'active',

    ];
}
