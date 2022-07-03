<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_name',
        'subject_description',
        'subject_price',
        'subject_sessions',
        'subject_rating',
    ];

    protected $primaryKey = 'subject_id';
}
