<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $table = 'languages';

    protected $fillable = [
        'abbr', 'loacle','name','direction','active','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function scopeActive($query){
        return $query -> where('active',1);
    }
    public function  scopeSelection($query){

        return $query -> select('id','abbr', 'name', 'direction', 'active');
    }

}
