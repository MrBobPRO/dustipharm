<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drugstore extends Model
{
  public static $tag = 'drugstores';
  protected $fillabe = ['title', 'working_hours', 'working_days', 'phone', 'email'];

  use HasFactory;
}
