<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'facility_id'];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
