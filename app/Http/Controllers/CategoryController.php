<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Exception;

class CategoryController extends Controller
{
    public function Viewcatpage(){
       return view ('user.pages.category');
    }

    public function StoreCat(Request $request){
      
        $validator = Validator::make($request->all(), [
            'cat_name' => 'required|string|min:2|max:40',
            'cat_slug' => 'required|string|min:2|max:40',
        ]);

        if (!$validator->fails()) { 
            try {
                $cat = Category::create([
                    "name"   => $request->cat_name,
                    "slug"   => $request->cat_slug,
                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Category has been succesfully created.'
                ]);
            }catch (Exception $e) {
                return response()->json(['unable' => 'Oops! Unable to Insert.']);
            }            
        } else {
            return response()->json(['error' => $validator->errors()]);
        }                
        return response()->json(['error' => $validator->errors()]);
    }

    public function EditCat(){
        $sql = Category::all();
        $data = $sql;
        return view('user.pages.catview',compact('data'));
    }

    public function ViewEditPage($id){
        $ct_id=$id;
	    $data = Category::findOrFail($id);
		return view('user.pages.catview',compact('data','ct_id'));
    }
    public function EditCatView($id){
        $ct_id=$id;
	    $data = Category::findOrFail($id);
		return view('user.pages.editcatview',compact('data','ct_id'));
    }
    public function UpdateCat(Request $request,$id){

       
        $validator = Validator::make($request->all(), [
            'cat_name' => 'required|string|min:2|max:40',
            'cat_slug' => 'required|string|min:2|max:40',

        ]);

        if (!$validator->fails()) { 
            try {
                $cat = Category::findOrFail($id)->update([
                    "name"   => $request->cat_name,
                    "slug"   => $request->cat_slug,
                    "status" => $request->cat_status,
                ]);
                return response()->json([
                    'success' => true,
                    'message' => 'Category has been succesfully Updated.'
                ]);
            }catch (Exception $e) {
                return response()->json(['unable' => 'Oops! Unable to Insert.']);
            }            
        } else {
            return response()->json(['error' => $validator->errors()]);
        }                
        return response()->json(['error' => $validator->errors()]);
    }

    public function DeleteCat($id)
	{
		$data = Category::findOrFail($id)->delete();
		return redirect()->back();
	}
   

}
