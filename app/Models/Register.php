<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registration';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'password'];
}
