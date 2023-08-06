<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index(){
        $categorys = Category::all();
        return view('category.index', compact('categorys'));
    }

    public function addcategory(){
        return view('category.add-category');
    }

    public function create(Request $request){
        $category = new Category();
        $category->CategoryName =  $request->catname;
        $category->Description = $request->description;
        $category->Picture = $request->picture;
        $category->Active = $request->active;
        if($request->hasfile('picture')){
           $file = $request->file('picture');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('asset/img', $filename);
           $category->Picture = $filename;
        }
        $category->save();
        return redirect()->back()->with('Success', 'Category created successfully');
    }

    public function edit($id){
        $categorys = Category::where('CategoryID','=',$id)->first();
        return view('category.edit-category', compact('categorys'));
    }

    public function updatecategory(Request $request, Category $category){
        $id = $request->CategoryID;
        $cat =  $request->category;
        $description = $request->description;
        $active = $request->active;
        if($request->hasfile('picture')){
            $destination = 'asset/img'.$category->Picture;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('asset/img', $filename);
            $picture = $filename;
         }

        Category::where('CategoryID','=',$id)->update([
            'CategoryName'=>$cat,
            'Description'=>$description,
            'Picture'=>$picture,
            'Active'=>$active
        ]);
        return redirect()->back()->with('Success', 'Category updated successfully');
    }

    public function deletecategory($id){
        Category::where('CategoryID','=',$id)->delete();
        return redirect()->back()->with('Success', 'Category deleted successfully');
    }
}
