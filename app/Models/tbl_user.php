<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_user extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    protected $table='tbl_user';
    protected $fillable=[
      'name',
      'email',
      'password',
      'address',
    ];
}
