<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table = 'users';
    protected $fillable = ['f_Username','f_Password','f_NgayTaoTK','f_Permission','f_DiaChi','f_Email','f_Name'];
    
}
