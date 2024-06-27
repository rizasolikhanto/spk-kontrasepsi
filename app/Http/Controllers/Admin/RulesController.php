<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contraceptives;
use App\Models\Rules;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules = Rules::latest()->get();
        return view('admin.rules.index',compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contraceptives = Contraceptives::all();
        return view('admin.rules.create', compact('contraceptives'));
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
            'group_age' => 'required',
            'minimum_age' => 'required',
            'maximum_age' => 'required',
            'amount_children' => 'required',
            'birth_interval' => 'required',
            'post_birth_status' => 'required',
            'post_miscarriage_status' => 'required',
            'contraceptive_status' => 'required',
            'contraceptive_id' => 'required',
        ]);
        Rules::create($request->all());
        return redirect('admin/rules')->with('toast_success', 'Data rules Berhasil Ditambahkan');
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
        //
        $contraceptives = Contraceptives::all();
        $rules = Rules::findOrFail($id); // Mengambil data berdasarkan ID
        return view('admin.rules.edit', compact('rules','contraceptives'));
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
            'group_age' => 'required',
            'minimum_age' => 'required',
            'maximum_age' => 'required',
            'amount_children' => 'required',
            'birth_interval' => 'required',
            'post_birth_status' => 'required',
            'post_miscarriage_status' => 'required',
            'contraceptive_status' => 'required',
            'contraceptive_id' => 'required',
        ]);
        // dd($request);
        Rules::where('id', $id)->update([
            'group_age' => $request->group_age,
            'minimum_age' => $request->minimum_age,
            'maximum_age' => $request->maximum_age,
            'amount_children' => $request->amount_children,
            'birth_interval' => $request->birth_interval,
            'post_birth_status' => $request->post_birth_status,
            'post_miscarriage_status' => $request->post_miscarriage_status,
            'contraceptive_status' => $request->contraceptive_status,
            'contraceptive_id' => $request->contraceptive_id,
        ]);
        return redirect('/admin/rules')->with('toast_success', 'Data Rule Berhasil Diubah!');
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
        Rules::destroy($id);
        return redirect('/admin/rules')->with('toast_success', 'Data Berhasil Dihapus');
    }
}
