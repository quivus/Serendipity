<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;


class AdminUser extends Model
{
    use HasApiTokens;
    //
    protected $table = 'admin_user';
    protected $fillable = ['name','password','role'];
}
