<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntryController extends Controller
{
    //
    public function store(Request $request){
        $data=new Entry();
        $data->email=$request->email;
        $data->password=$request->password;
        $data->save();
        return redirect()->route('table')->with ('message','Data inserted successfully');
    }
    public function table()
    {
        $data=entry::paginate(5);
     return view('table', compact('data'));
    }
    public function edit($id){
        $data=entry::find($id);
        return view ('edit',compact('data'));
    }
    public function update(Request $request,$id){
        $data=Entry::find($id);
        $data->email=$request->email;
        $data->password=$request->password;
        $data->save();
        return redirect()->route('table')->with ('message','Data updated successfully');
    }
    public function delete($id)
    {
        $data = Entry::find($id);
        $data->delete();
        return redirect()->route('table')->with('message','Data deleted successfully');
    }

}
