<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dinnerModel extends Model
{
    use HasFactory;
    protected $table = 'dinner';
    public $timestramp = true;
}
