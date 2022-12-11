<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoalDetails extends Model
{
    use HasFactory;
    protected $table = 'soal_details';
    protected $guarded = [
                         'id',
                         'created_at',
                         'updated_at',
    ];
}