<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Userdata extends Model
{
    protected $fillable = ['full_name', 'email', 'password', 'repeat_pass'];
    protected $table = 'userdatas';
    use HasFactory;
}
