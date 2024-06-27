<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contraceptives;
use Illuminate\Http\Request;

class ContraceptivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contraceptives = Contraceptives::all();
        return view('admin.contraceptives.index', compact('contraceptives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contraceptives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'suggestion' => 'required',
        ]);
        Contraceptives::create($request->all());
        return redirect('admin/contraceptives')->with('toast_success', 'Data kontrasepsi Berhasil Ditambahkan');
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
        $contraceptives = Contraceptives::findOrFail($id); // Mengambil data berdasarkan ID
        return view('admin.contraceptives.edit', compact('contraceptives'));
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
        //
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'suggestion' => 'required',
        ]);

        Contraceptives::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'suggestion' => $request->suggestion,
        ]);

        return redirect('admin/contraceptives')->with('toast_success', 'Data Penyakit Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Contraceptives::destroy($id);
        return redirect('/admin/contraceptives')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
