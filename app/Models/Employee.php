<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $primaryKey = 'employee_id';
    protected $fillable = ['firstname','lastname','date_of_birth','education_qualification','address','email','phone','photo','resume'];
}
