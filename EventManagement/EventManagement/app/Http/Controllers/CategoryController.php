<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.add_category');
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->c_name = $request->c_name;
        $c_image = $request->c_image;
        $filename = time().'.'.$c_image->getClientOriginalExtension();
        $c_image->move('category',$filename);
        $category->c_image = $filename;

        $category->save();
        return redirect('show_cat');
    }
    public function show()
    {
        $category = Category::all();
        return view('admin.show_category',compact('category'));
    }
    public function destroy($id)
    {
        Category::destroy(array('id',$id));
        return redirect('show_cat');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.edit_category',compact('category'));
    }
    public function update(Request $request ,$id)
    {
        $category = Category::find($id);
        $category->c_name = $request->c_name;
        if($request->hasFile('c_image')) 
        {
            $path = 'category'.$category->c_image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $c_image = $request->c_image;
            $filename = time().'.'.$c_image->getClientOriginalExtension();
            $c_image->move('category',$filename);
            $category->c_image = $filename;
    
        }
        $category->save();
        return redirect('show_cat');
    }

}
