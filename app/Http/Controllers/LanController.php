<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLang;
use App\Models\Language;
use Exception;
use Illuminate\Http\Request;

class LanController extends Controller
{
    //



    public function show(){

      try{

           $languages =Language::select()->paginate(10);
            return view('admin.lang.index',compact('languages'));
} catch(Exception $ES)
{
 return('يوجد خطا برجاء التواصل مع المبرمج المسئول لحلها');
}
        
    }




    public function edit($id){

        try{
   $language= Language::find($id);
   if (!$language) {
    return redirect()->route('admin.languages')->with(['error' => 'هذه اللغة غير موجوده']);
}

return view('admin.lang.edit', compact('language'));
              
  } catch(Exception $ES)
  {
   return('يوجد خطا برجاء التواصل مع المبرمج المسئول لحلها');
  }
          
      }





      /////////////////////////////////////////////
      public function update($id , UpdateLang $request){

        try{
            $language= Language::find($id);
         
            if (!$request->has('active'))
            $request->request->add(['active' => 0]);
        else
            $request->request->add(['active' => 1]);


           
           $language->update($request ->except('_token'));
           return redirect()->back()->with(['scuess' => 'تم تحديث البيانات بنجاح']);
              
  } catch(Exception $ES)
  {
   return('يوجد خطا برجاء التواصل مع المبرمج المسئول لحلها');
  }
          
      }



      //////////////////////////////////////// توجيه الى الفورم الادخال
      public function create(){

        try{
            
            return view('admin.lang.create');
              
  } catch(Exception $ES)
  {
   return('يوجد خطا برجاء التواصل مع المبرمج المسئول لحلها');
  }
          
      }


       //////////////////////////////////////// حفظ في الداتا بيز
       
       public function store(UpdateLang $r){

        try{
            Language::create([
                'name' =>  $r->name,
                'abbr' =>$r->abbr,
                'direction' => $r->direction,
                'active' => $r -> active 


            ]);

            return redirect()->back()->with(['scuess' => 'تم الحفظ بنجاح ']);
              
  } catch(Exception $ES)
  {
   return('يوجد خطا برجاء التواصل مع المبرمج المسئول لحلها');
  }
          
      }


      ///////////////////////////////////////////////


      public function delete($id){

        try{
            $data =Language::find($id);
     $data -> delete();
            return redirect()->back()->with(['scuess' => 'تم الحذف بنجاح']);
              
  } catch(Exception $ES)
  {
   return('يوجد خطا برجاء التواصل مع المبرمج المسئول لحلها');
  }
          
      }
}
