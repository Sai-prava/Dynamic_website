<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class heroModel extends Model
{
    use HasFactory;
    protected $table = 'herosection1';
    public $timestamp = true;
}
