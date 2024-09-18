<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function create()
    {
        return view('admin.add_gallery');
    }
    public function store(Request $request)
    {
        $gallery = new Gallery();
        $g_image = $request->g_image;
        $filename = time().'.'.$g_image->getClientOriginalExtension();
        $g_image->move('gallery',$filename);
        $gallery->g_image = $filename;

        $gallery->save();
       return redirect('show_img');
    }
    public function show()
    {
        $gallery = Gallery::all();
        return view('admin.show_gallery',compact('gallery'));
    }
    public function destroy($id)
    {
        Gallery::destroy(array('id',$id));
        return redirect('show_img');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.edit_gallery',compact('gallery'));
    }
    public function update(Request $request ,$id)
    {
        $gallery = Gallery::find($id);
        if($request->hasFile('g_image')) 
        {
            $path = 'gallery'.$gallery->g_image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $g_image = $request->g_image;
            $filename = time().'.'.$g_image->getClientOriginalExtension();
            $g_image->move('gallery',$filename);
            $gallery->g_image = $filename;
    
        }
        $gallery->save();
        return redirect('show_img');
    }


}
