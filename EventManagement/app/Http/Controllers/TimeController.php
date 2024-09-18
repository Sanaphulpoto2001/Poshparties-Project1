<?php

namespace App\Http\Controllers;
use App\Models\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function create()
    {
        return view('admin.add_time');
    }
    public function store(Request $request)
    {
        $time = new Time();
        $time->time_in = $request->time_in;
        $time->time_out = $request->time_out;
        $time->date = $request->date;
       

        $time->save();
        return redirect('show_tm');
    }
    public function show()
    {
        $time = Time::all();
        return view('admin.show_time',compact('time'));
    }
    public function destroy($id)
    {
        Time::destroy(array('id',$id));
        return redirect('show_tm');
    }
    public function edit($id)
    {
        $time = Time::find($id);
        return view('admin.edit_time',compact('time'));
    }
    public function update(Request $request ,$id)
    {
        $time = Time::find($id);
        // $time = new Time();
        $time->time_in = $request->time_in;
        $time->time_out = $request->time_out;
        $time->date = $request->date;
        $time->save();
        return redirect('show_tm');
    }
}
