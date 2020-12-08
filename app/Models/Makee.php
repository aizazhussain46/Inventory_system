<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makee extends Model
{
    use HasFactory;
    protected $table = 'makes';
    protected $fillable = ['make_name'];
}
