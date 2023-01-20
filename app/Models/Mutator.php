<?php

namespace App\Models;

use App\Enum\RoleEnum;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class Mutator extends Model
{
    use HasFactory;
    //mutator
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'created_at',
        'status',
        'role'
    ];
    public $timestamps = false;
    // protected $appends = ['full_name'];
    // public function setNameAttribute($value)
    // {
    //     return $this->attributes['name'] = "Ms " . $value;
    // }
    // public function setAddressAttribute($value)
    // {
    //     return $this->attributes['address'] = $value . ". India";
    // }

    //accessor
    // function getNameAttribute($value)
    // {
    //     return ucFirst($value);
    // }

    // function getAddressAttribute($value)
    // {
    //     return ($value . ",India");
    // }
    //get full name
    // public function getFullNameAttribute()
    // {
    //     return ucfirst($this->first_name) . ' ' . ucfirst($this->last_name);
    // }
    //casting
    protected $casts = [
        'last_name' => 'encrypted',
        'status' => 'boolean',
        'created_at' => 'datetime:F:j:Y:D',
        'role' => RoleEnum::class

    ];
}
