<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students' ;
    protected $primarykey = 'id' ;
    protected $fillable = ['first_name', 'last_name', 'address'];
    use HasFactory;
}
