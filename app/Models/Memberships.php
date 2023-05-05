<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memberships extends Model
{
    use HasFactory;

    public $fillable = ['nama_lengkap', 'nama_penanggung', 'tipe_membership', 'email', 'notelp', 'membership', 'csv', 'alamat'];

    protected $guarded = ['id'];
}
