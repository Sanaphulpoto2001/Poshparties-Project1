<?php

namespace App\Http\Controllers;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OrganizerController extends Controller
{
    public function create()
    {
        return view('admin.add_organizers');
    }
    public function store(Request $request)
    {
        $organizer = new Organizer();
        $organizer->o_name = $request->o_name;
        $organizer->o_email = $request->o_email;
        $organizer->o_description = $request->o_description;
        $o_image = $request->o_image;
        $filename = time().'.'.$o_image->getClientOriginalExtension();
        $o_image->move('organizer',$filename);
        $organizer->o_image = $filename;

        $organizer->save();
        return redirect('show_org');
    }
    public function show()
    {
        $organizer = Organizer::all();
        return view('admin.show_organizers',compact('organizer'));
    }
    public function destroy($id)
    {
        Organizer::destroy(array('id',$id));
        return redirect('show_org');
    }
    public function edit($id)
    {
        $organizer = Organizer::find($id);
        return view('admin.edit_organizers',compact('organizer'));
    }
    public function update(Request $request ,$id)
    {
        $organizer = Organizer::find($id);
        $organizer->o_name = $request->o_name;
        $organizer->o_email = $request->o_email;
        $organizer->o_description = $request->o_description;
        if($request->hasFile('o_image')) 
        {
            $path = 'organizer'.$organizer->o_image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $o_image = $request->o_image;
            $filename = time().'.'.$o_image->getClientOriginalExtension();
            $o_image->move('organizer',$filename);
            $organizer->o_image = $filename;
    
        }
        $organizer->save();
        return redirect('show_org');
    }

}
