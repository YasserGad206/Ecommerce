<?php

namespace App\Http\Controllers;

use App\Models\main_categerys;
use App\Models\Vendor;
use App\Notifications\VendorCreated;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Nette\Schema\Expect;

class Vendors extends Controller
{
    //
////////////////////////////////////////////////////// show all //////////////////

    public function show(){

        try{
  
             $vendor =Vendor::with('MainCat')->select()->paginate(10);
            
              return view('admin.vendor.index',compact('vendor'));
       } catch(Exception $ES)  {
                      
                 return($ES->getMessage());
            }         
          
      }  

////////////////////////////////////////////////////// delete //////////////////

      public function delete($id){

        try{
            $data =Vendor::find($id);
     $data -> delete();
            return redirect()->back()->with(['scuess' => 'تم الحذف بنجاح']);
              
  } catch(Exception $ES)
  {
    return redirect()->back()->with(['error' => $ES->getMessage().'يوجد خطا ']);
  }
          
      }
///////////////////////////////////////////////////////save ////////////////////////////////////
      public function create(){

        try{
          
           $vendor=main_categerys::select('id','name')->where('translation_lang',get_default_lang())->get();
         
            return view('admin.vendor.create',compact('vendor'));
              
  } catch(Exception $ES)
  {
   return('يوجد خطا برجاء التواصل مع المبرمج المسئول لحلها');
  }
          
      }

      public function store(Request $request){
        try{
          $filePath = "";
          if ($request->has('logo')) {
        
            $filePath = uploadImage('vendors', $request->logo);
           }
 


         $save= Vendor::create ([
          'name' => $request ->name, 
          'mobile' => $request ->mobile,
           'password'=> $request ->password, 
           'address'=> $request ->address, 
           'email'=> $request ->email, 
           'logo'=> $filePath, 
           'category_id'=> $request ->main, 
           'active'=> $request -> active,


         ]);
if(!$save)
{
  return redirect()->back()->with(['error' => 'يوجد مشكلة برجاء المحاول مره اخرى ']);

}
else{
  Notification::send( $save,new VendorCreated($save));
  return redirect()->back()->with(['scuess' => '   تم الحفظ بنجاح وارسال بريد الاكتروني لهذا التاجر ']);
}
          

      }catch(Exception $ex)
      {
        return redirect()->back()->with(['error' =>  $ex->getMessage()]);

      }      

      }



///////////////////////////////////////////update ///////////////////
public function edit($id){

  try{
$vendor= Vendor::select()->find($id);

$vendor1=main_categerys::select('id','name')->where('translation_lang',get_default_lang())->get();

if (!$vendor) {
return redirect()->route('admin.vendor')->with(['error' => 'لا يوجد بيانات لهذا القسم' ]);
}

return view('admin.vendor.edit', compact('vendor','vendor1'));

        
} catch(Exception $ES)
{
return redirect()->route('admin.vendor')->with(['error' => $ES -> getMessage() ]);
}
}







    }
    
