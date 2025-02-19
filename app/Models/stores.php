<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stores extends Model
{
    /** @use HasFactory<\Database\Factories\StoresFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'seller_id',
    ];
}
