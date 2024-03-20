<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lunchModel extends Model
{
    use HasFactory;
    protected $table = 'lunch';
    public $timestamp = true;
}
