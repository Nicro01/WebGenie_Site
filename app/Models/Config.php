<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'primary_color',
        'secondary_color',
        'tertiary_color',
        'quaternary_color',
        'quinary_color',
        'status'
    ];
}
