<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawsuit extends Model
{
    use HasFactory;

    protected $fillable = ['case_number', 'case_type', 'case_subject'];
};