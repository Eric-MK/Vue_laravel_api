<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];//the $fillable property is set to ['name','slug'], which means that these two attributes can be set en masse using the create() or update() methods.
}
