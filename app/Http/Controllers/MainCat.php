<?php

namespace App\Http\Controllers;

use App\Http\Requests\validcatupdate;
use App\Http\Requests\ValidStoreCat;
use App\Models\main_categerys;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainCat extends Controller
{
    //
    public function show(){

        try{
  
             $mains =main_categerys::select()->where('translation_lang',get_default_lang())->paginate(10);
              return view('admin.maincategory.index',compact('mains'));
       } catch(Exception $ES)  {
                      
                 return('يوجد خطا برجاء التواصل مع المبرمج المسئول لحلها');
            }         
          
      }  



      public function create(){

         try{
            
            return view('admin.maincategory.create');
              
       } catch(Exception $ES)
          {
                  return('يوجد خطا برجاء التواصل مع المبرمج المسئول لحلها');
                }
          
      }


       //////////////////////////////////////// حفظ في الداتا بيز
   
       public function store(ValidStoreCat $r){
            
try{

     
      $aftercollect=collect($r -> category);

      $afterfiter=$aftercollect->filter(function($val , $key){
      return $val['translation_lang'] == get_default_lang();
      
      
      });
       $afterarray= array_values($afterfiter ->all())[0];
     
       $filePath = "";
       if ($r->has('photo')) {
     
         $filePath = uploadImage('maincategories', $r->photo);
        }
     
   DB::beginTransaction();
    $default_category_id = main_categerys::insertGetId([
      'translation_lang' => $afterarray['translation_lang'],
      'translation_of' => 0,
      'name' => $afterarray['name'],
      'slug' => $afterarray['name'],
      'photo' => $filePath
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
                    'photo' => $filePath
                ];
            }

 main_categerys::insert($categories_arr) ;
}



       DB::commit();
       return redirect()->route('admin.maincat')->with(['scuess' => 'تم الحفظ بنجاح']);

}catch(Exception $ex)
{
    
      DB::rollBack();
      return redirect()->route('admin.maincat')->with(['error' => $ex -> getMessage() ]);
      
}
 

        
          
      }

////////////////////////////////////////////// delete ///////////////////////////////////
public function delete($id){

  try{
      $data =main_categerys::find($id);

    unlink($data -> photo);
$data -> delete();
      return redirect()->back()->with(['scuess' => 'تم الحذف بنجاح']);
        
} catch(Exception $ES)
{
return('يوجد خطا برجاء التواصل مع المبرمج المسئول لحلها');
}
    
}
////////////////////////////////////////////// edit ///////////////////////////////////

      public function edit($id){

        try{
    $mainCategory= main_categerys::with('categories')->find($id);
   if (!$mainCategory) {
    return redirect()->route('admin.maincat')->with(['error' => 'لا يوجد بيانات لهذا القسم' ]);

    
}

 return view('admin.maincategory.edit', compact('mainCategory'));

              
  } catch(Exception $ES)
  {
    return redirect()->route('admin.maincat')->with(['error' => $ES -> getMessage() ]);
    }
          
      }





//////////////////////////////////////////// update data ////////////////////////
public function update($id ,  Request $request){

  
  try{
      $mainCategory= main_categerys::find($id);
   


      $category = array_values($request->category) [0];

      if (!$request->has('category.0.active'))
          $request->request->add(['active' => 0]);
      else
          $request->request->add(['active' => 1]);


          main_categerys::where('id', $id)
                ->update([
                    'name' => $category['name'],
                    'active' => $request->active,
                ]);

                if ($request->has('photo')) {
                  $filePath = uploadImage('maincategories', $request->photo);
                  main_categerys::where('id', $id)
                      ->update([
                          'photo' => $filePath,
                      ]);
              }
     
     return redirect()->route('admin.maincat')->with(['scuess' => 'تم التعديل بنجاح']);
        
} catch(Exception $ES)
{
  return redirect()->route('admin.maincat')->with(['error' => $ES -> getMessage() ]);}
    
}




public function change($id)
{


  try{
    $maincategory = main_categerys::find($id);
            if (!$maincategory)
                return redirect()->route('admin.maincat')->with(['error' => 'هذا القسم غير موجود ']);

           $status =  $maincategory -> active  == 0 ? 1 : 0;

           $maincategory -> update(['active' =>$status ]);

            return redirect()->route('admin.maincat')->with(['scuess' => ' تم تغيير الحالة بنجاح ']);


    

    
  }catch(Exception $ES)
  {
    return redirect()->route('admin.maincat')->with(['error' => $ES -> getMessage() ]);
      
  }


}




}
