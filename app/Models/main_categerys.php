<?php

namespace App\Models;

use App\Observers\MainCategoryObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class main_categerys extends Model
{

/*
   
    */
    use HasFactory;
    protected $table = 'main_categery';

    protected $fillable = [
        'translation_lang', 'name','photo','active','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    protected static function boot()
    {
        parent::boot();
        main_categerys::observe(MainCategoryObserver::class);
    }

    public function scopeSelection($query)
    {

        return $query->select('id', 'translation_lang', 'name', 'slug', 'photo', 'active', 'translation_of');
    }




    public function categories()
    {
      return  $this -> hasMany(self::class , 'translation_of') ;
    }


    public function vendor(){
        return $this -> hasMany('App\Models\Vendor','category_id','id');
    }


    public function ScopeDefultCat($query)
    {
        return $query->where('translation_of',0);
    }



    public function subcat(){
        return $this -> hasMany('App\Models\subcategories','category_id','id');
    }

}
