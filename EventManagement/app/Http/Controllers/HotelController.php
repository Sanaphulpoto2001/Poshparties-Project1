<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Hotel;
use App\Models\HotelBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HotelController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('admin.add_hotel',compact('category'));
        
    }
    public function store(Request $request)
    {
        $hotel = new Hotel();
        $h_image = $request->h_image;
        $hotel->category_id = $request->category_id;
        $hotel->h_name = $request->h_name;
        $hotel->h_location = $request->h_location;
        $filename = time().'.'.$h_image->getClientOriginalExtension();
        $h_image->move('hotel',$filename);
        $hotel->h_image = $filename;


        $hotel->save();
        return redirect('show_hotl');
    }
    public function show()
    {
        $hotel = Hotel::all();
        return view('admin.show_hotel',compact('hotel'));
    }
    public function destroy($id)
    {
        Hotel::destroy(array('id',$id));
        return redirect('show_hotl');
    }
    public function edit($id)
    {
        $hotel = Hotel::find($id);
        $category = Category::all();
        return view('admin.edit_hotel',compact('hotel','category'));
    }
    public function update(Request $request ,$id)
    {
        $hotel = Hotel::find($id);
        $hotel->category_id = $request->category_id;
        $hotel->h_name = $request->h_name;
        $hotel->h_location = $request->h_location;
        if($request->hasFile('h_image')) 
        {
            $path = 'hotel'.$hotel->h_image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $h_image = $request->h_image;
            $filename = time().'.'.$h_image->getClientOriginalExtension();
            $h_image->move('hotel',$filename);
            $hotel->h_image = $filename;
    
        }
        $hotel->save();
        return redirect('show_hotl');
    }
    public function showhbooking()
    {
        $hbooking = HotelBook::all();
        return view('admin.showhotelbooking',compact('hbooking'));
    }

}
