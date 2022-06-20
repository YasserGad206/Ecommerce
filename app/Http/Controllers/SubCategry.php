<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidStoreCat;
use App\Models\main_categerys;
use App\Models\subcategories;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategry extends Controller
{
    //

    public function show(){

        try{
 
            $mains =subcategories::with('maincats')->select()->where('translation_lang',get_default_lang())->paginate(10);
         
            
              return view('admin.SubCategry.index',compact('mains'));
       } catch(Exception $ES)  {
                      
                 return($ES->getMessage());
            }         
          
      }  



      /////////////////////////////////////////////////////////store
      public function create(){

        try{
            $main =main_categerys::defultCat()->select('id','name')->get();
          
           return view('admin.SubCategry.create',compact('main'));
             
      } catch(Exception $ES)
         {
            return($ES->getMessage());
               }
         
     }






     public function store(ValidStoreCat $r){
            
        try{
        
       

              $aftercollect=collect($r -> category);
        
              $afterfiter=$aftercollect->filter(function($val , $key){
              return $val['translation_lang'] == get_default_lang();
              
              
              });
               $afterarray= array_values($afterfiter ->all())[0];
             
               $filePath = "";
               if ($r->has('photo')) {
             
                 $filePath = uploadImage('subcategories', $r->photo);
                }
             
           DB::beginTransaction();
            $default_category_id = subcategories::insertGetId([
              'translation_lang' => $afterarray['translation_lang'],
              'translation_of' => 0,
              'name' => $afterarray['name'],
              'slug' => $afterarray['name'],
              'photo' => $filePath,
              'category_id'=>$r -> main,

          ]);
        
        
          $afterfiter1=$aftercollect->filter(function($val , $key){
              return $val['translation_lang'] != get_default_lang();
              
              
              });
        
        
              if (isset($afterfiter1) && $afterfiter1->count()) {
        
                    $categories_arr = [];
                    foreach ($afterfiter1 as $category) {
                        $categories_arr[] = [
                            'translation_lang' => $category['translation_lang'],
                            'translation_of' => $default_category_id,
                            'name' => $category['name'],
                            'slug' => $category['name'],
                            'photo' => $filePath,
                            'category_id'=> $r -> main
                        ];
                    }
        
                    subcategories::insert($categories_arr) ;
        }
        
        
        
               DB::commit();
               return redirect()->route('admin.subcategories')->with(['scuess' => 'تم الحفظ بنجاح']);
        
        }catch(Exception $ex)
        {
            
              DB::rollBack();
              return redirect()->route('admin.subcategories')->with(['error' => $ex -> getMessage() ]);
              
        }
         
        
                
                  
              }

}
