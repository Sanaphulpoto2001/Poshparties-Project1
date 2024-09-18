<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VenueController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('admin.add_venue',compact('category'));
    }
    public function store(Request $request)
    {
        $venue = new Venue();
        $v_image = $request->v_image;
        $venue->category_id = $request->category_id;
        $venue->v_name = $request->v_name;
        $venue->v_location = $request->v_location;
        $filename = time().'.'.$v_image->getClientOriginalExtension();
        $v_image->move('venue',$filename);
        $venue->v_image = $filename;

        $venue->save();
       return redirect('show_ven');
    }
    public function show()
    {
        $venue = Venue::all();
        return view('admin.show_venue',compact('venue'));
    }
    public function destroy($id)
    {
        Venue::destroy(array('id',$id));
        return redirect('show_ven');
    }

    public function edit($id)
    {
        $venue = Venue::find($id);
        $category = Category::all();
        return view('admin.edit_venue',compact('venue','category'));
    }
    public function update(Request $request ,$id)
    {
        $venue = Venue::find($id);
        $venue->category_id = $request->category_id;
        $venue->v_name = $request->v_name;
        $venue->v_location = $request->v_location;
        if($request->hasFile('v_image')) 
        {
            $path = 'venue'.$venue->v_image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $v_image = $request->v_image;
            $filename = time().'.'.$v_image->getClientOriginalExtension();
            $v_image->move('venue',$filename);
            $venue->v_image = $filename;
    
        }
        $venue->save();
        return redirect('show_ven');
    }
    public function showbooking()
    {
        $booking = Booking::all();
        return view('admin.showvenuebooking',compact('booking'));
    }

}
