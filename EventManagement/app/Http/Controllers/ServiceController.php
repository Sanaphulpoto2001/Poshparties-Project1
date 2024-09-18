<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function create()
    {
        return view('admin.add_service');
    }
    public function store(Request $request)
    {
        $service = new Service();
        $service->s_name = $request->s_name;
        $s_image = $request->s_image;
        $filename = time().'.'.$s_image->getClientOriginalExtension();
        $s_image->move('service',$filename);
        $service->s_image = $filename;

        $service->save();
        return redirect('show_ser');
    }
    public function show()
    {
        $service = Service::all();
        return view('admin.show_service',compact('service'));
    }
    public function destroy($id)
    {
        Service::destroy(array('id',$id));
        return redirect('show_ser');
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.edit_service',compact('service'));
    }
    public function update(Request $request ,$id)
    {
        $service = Service::find($id);
        $service->s_name = $request->s_name;
        if($request->hasFile('s_image')) 
        {
            $path = 'service'.$service->s_image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $s_image = $request->s_image;
            $filename = time().'.'.$s_image->getClientOriginalExtension();
            $s_image->move('service',$filename);
            $service->s_image = $filename;
    
        }
        $service->save();
        return redirect('show_ser');
    }
    public function service()
    {
        $service = Service::all();
        return view('services',compact('service'));
    }
}
