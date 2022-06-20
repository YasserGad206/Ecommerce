<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Vendor extends Model
{
     use Notifiable ;
    use HasFactory;
    
    protected $table = 'vendors';
    protected $primaryKey='id';
    protected $fillable = [
        'latitude', 'longitude', 'name', 'mobile', 'password', 'address', 'email', 'logo', 'category_id', 'active', 'created_at', 'updated_at'
    ];

    protected $hidden = ['category_id', 'password'];


    public function MainCat(){
      return  $this -> belongsTo('App\Models\main_categerys','category_id','id');
    }

}
