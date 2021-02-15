<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\jadwal;
 
class JdwController extends Controller
{
    public function index()
    {
        $jadwals = jadwal::latest()->paginate(5);
 
        return view('jadwals.index',compact('jadwals'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
 
    public function create()
    {
        return view('jadwals.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric|uniqe',
            'jadwal' => 'required',
            'matakuliah_id' => 'required',
        ]);
 
        jadwal::create($request->all());
 
        return redirect()->route('jadwals.index')
                        ->with('success','jadwal created successfully.');
    }
 
    public function show(int $id)
    {
        
        $jadwal = jadwal::findOrFail($id); 
        return view('jadwals.show',['jadwal' => $jadwal]);
    }
 
    public function edit(int $id)
    {
        $jadwal = jadwal::findOrFail($id); 
        return view('jadwals.edit',['jadwal' => $jadwal]);
    }
 
    public function update(Request $request, jadwal $post)
    {
        $request->validate([
            'id' => 'required|numeric|uniqe',
            'jadwal' => 'required',
            'matakuliah_id' => 'required',
        ]);
 
        $post->update($request->all());
 
        return redirect()->route('jadwals.index')
                        ->with('success','jadwal updated successfully');
    }
 
    public function destroy($id)
    {
        $jadwal = jadwal :: where ('id',$id)->first();
     
         $jadwal -> delete(); return redirect()->route('jadwals.index');

                with('success','jadwal deleted successfully');
        
    }
}