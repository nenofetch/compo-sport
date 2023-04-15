<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'logo', 'hero', 'favicon', 'slogan', 'visitors', 'event',
        'venue', 'telephone1', 'telephone2', 'email', 'address1', 'address2', 'open_hours'
    ];

}
