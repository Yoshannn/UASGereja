<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gereja;
class GerejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Gereja::all();
        return view('jemaat.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jemaat.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jemaat_kode' => 'bail|required|unique:tb_jemaat',
            'jemaat_nama' => 'required'
            ],
            [
            'jemaat_kode.required' => 'Kode wajib diisi',
            'jemaat_kode.unique' => 'Nama Tahun sudah ada',
            'jemaat_nama.required' => 'Nama wajib diisi'
            ]);
            
            Gereja::create([
            'jemaat_kode' => $request->jemaat_kode,
            'jemaat_nama' => $request->jemaat_nama,
            'jemaat_status' => $request->jemaat_status,
            'jemaat_alamat' => $request->jemaat_alamat
            ]);
            return redirect('jemaat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
            {
            $row = Gereja::findOrFail($id);
            return view('jemaat.edit', compact('row'));
             }
            
           

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        {
            $request->validate([
            'jemaat_kode' => 'bail|required|unique:tb_jemaat',
             'jemaat_nama' => 'required'
             ],
             [
             'jemaat_kode.required' => 'Kode wajib diisi',
             'jemaat_kode.unique' => 'Nama Tahun sudah ada',
             'jemaat_nama.required' => 'Nama wajib diisi'
             ]);
            
             $row = Gereja::findOrFail($id);
             $row->update([
             'jemaat_kode' => $request->jemaat_kode,
             'jemaat_nama' => $request->jemaat_nama,
             'jemaat_status' => $request->jemaat_status,
             'jemaat_alamat' => $request->jemaat_alamat
            
            ]);
            
            return redirect('jemaat');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
        public function destroy($id)
         {
    $row = Gereja::findOrFail($id);
        $row->delete();

    return redirect('jemaat');
    }
    public function search(Request $request)
{
    $keyword = $request->search;

    $rows = Gereja::where('jemaat_nama','like',"%" . $keyword . "%")->paginate(5);

    return view('jemaat.index', compact('rows'))->with('i', (request()->input('page',1) - 1) * 5);
}
}
