<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drugstore extends Model
{
  protected $fillabe = ['title', 'working_hours', 'working_days', 'phone', 'email'];

  use HasFactory;
}
