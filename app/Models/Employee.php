<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = ['first_name', 'last_name', 'mobile', 'email', 'address', 'gender', 'role', 'dateofbirth'];
}
