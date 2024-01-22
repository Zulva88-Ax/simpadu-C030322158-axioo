<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gudang;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateGudangRequest;
use App\Http\Requests\StoreGudangRequest;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $alldata = $request->all();
       $gudang = Gudang::all();

        return view('pages.users.index-gudang', compact('gudang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.users.gudang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'gudang'=>'string|required', 
            'jenis_gudang'=>'string',
            'luas'=>'string',
            'volume'=>'string',
            'keterangan'=>'string',
        ]);

        Gudang::create($validateData);
        return redirect('gudang')->with('success', 'new user successfully created');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gudang = Gudang::findOrFail($id);
        return view('pages.users.edit-gudang')->with('gudang', $gudang);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'gudang'=>'string|required', 
            'jenis_gudang'=>'string',
            'luas'=>'string',
            'volume'=>'string',
            'keterangan'=>'string',
        ]);

        $gudang = Gudang::findOrFail($id);
        $gudang-> update($validateData);
        return redirect('gudang')->with('succsess', 'new user successfully created');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gudang = Gudang::findOrFail($id) ;
        $gudang->delete();
        return redirect()->back()->with('success', 'Delete User Successfully');
    }
}
