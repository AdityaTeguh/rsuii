<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use HasFactory;
    protected $table='cr_user';
    protected $fillable=['user_id','name','username','peran_id','user_aktif','kunci'];
    const CREATED_AT = 'i_datetime';
    const UPDATED_AT = 'u_datetime';
    // protected $guarded=[];
}
