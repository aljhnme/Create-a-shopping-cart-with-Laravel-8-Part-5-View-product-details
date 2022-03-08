<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\tbl_user;
use App\Models\Product;
use Hash;
use Validator;

class userController extends Controller
{
    function insert(Request $request)
    {
        $request->validate([
          'name'                  => 'required',
          'email'                 => 'required',
          'password'              => 'required|min:6|confirmed',
          'address'               => 'required',
        ]);
        
        $user = new tbl_user;

        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->address  = $request->input('address');

        $user->save();

    }
 
    function check_login(Request $request)
    {
         $request->validate([
           'email_l'    => 'required',
           'password_l' => 'required',
         ]);
          
         if (Auth::attempt(['email' => $request->email_l, 'password' => $request->password_l])) 
         {
         	  return redirect('/');
         }

          return back()->with('failed_lgoin','This account doesn t exist.');
    }
    

   function index()
    {  
      $data=Product::all()->toArray();
      return view('index',compact('data'));
    }

    function insert_pro(Request $request)
    {
      $Validator=Validator::make($request->all(),[
         'name_product'  => 'required',
         'price_product' => 'required',
         'about_product' => 'required',
         'img_product'   => 'required|image|mimes:jpeg,png,jpg',
      ]);
   
      
       if ($Validator->passes()) 
       {
         $image_name=time().'.'.$request->img_p->extension();
         $request->img_p->move(public_path('images'),$image_name);

         $insert_info_product= new Product();

         $insert_info_product->name_product=$request->name_p;
         $insert_info_product->price_product=$request->price_p;
         $insert_info_product->about_product=$request->about_p;
         $insert_info_product->rating=$request->rating;
         $insert_info_product->img_product=$image_name;
         $insert_info_product->user_id=Auth::id();

         $insert_info_product->save();

         return response()->json(['success_insert' => 'yes']);
        
       }

       $errors=array('name_product'=>$Validator->errors()->first('name_product'),
                     'price_product'=>$Validator->errors()->first('price_product'),
                     'about_product'=>$Validator->errors()->first('about_product'),
                     'img_product'=>$Validator->errors()->first('img_product'));

       return response()->json($errors);

    }

    function S_product($id)
    {
       $data_product=Product::find($id);
       return view('show_product',['data_product' => $data_product]);
    }

    function logout()
    {
       Session::flush();
       Auth::logout();
       return redirect('/register');
    }
}
