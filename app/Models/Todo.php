<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['titel', 'deteils', 'user_id', 'status'];
    use HasFactory;
}
