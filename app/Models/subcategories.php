<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    use HasFactory;

    protected $table = 'sub_categery';

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



    public function scopeSelection($query)
    {

        return $query->select('id', 'parent_id','category_id','translation_lang', 'name', 'slug', 'photo', 'active', 'translation_of');
    }

    public function ScopeDefultCat($query)
    {
        return $query->where('translation_of',0);
    }

    public function maincats(){
        return $this -> belongsTo('App\Models\main_categerys','category_id','id');
    }

}
