<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Consultations;
use App\Models\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultationsController extends Controller
{
    //
    public function index(){
        return view('user.Consultations.create');
    }
    public function process(Request $request){
        $request->validate([
            'age'=> 'required',
            'amount_children' => 'required',
            'birth_interval' => 'required',
            'post_birth_status' => 'required',
            'post_miscarriage_status' => 'required',
            'contraceptive_status' => 'required',
        ]);
        $age = $request->input('age');
        $amount_children = $request->input('amount_children');
        $birth_interval = $request->input('birth_interval');
        $post_birth_status = $request->input('post_birth_status');
        $post_miscarriage_status = $request->input('post_miscarriage_status');
        $contraceptive_status = $request->input('contraceptive_status');

        // Implementasi logika pencocokan dengan data training
        $recommendations = Rules::where('minimum_age','<=', $age)
            ->where('maximum_age','>=', $age)
            ->where('amount_children', $amount_children)
            ->where('birth_interval', $birth_interval)
            ->where('post_birth_status', $post_birth_status)
            ->where('post_miscarriage_status', $post_miscarriage_status)
            ->where('contraceptive_status', $contraceptive_status)
            ->first();

        if ($recommendations) {
            $consultations = Consultations::create([
                'user_id' => Auth::user()->id,
                'contraceptive_id' => $recommendations->contraceptive_id,
                'age' => $recommendations->maximum_age,
                'amount_children' => $recommendations->amount_children,
                'birth_interval' => $recommendations->birth_interval,
                'post_birth_status' => $recommendations->post_birth_status,
                'post_miscarriage_status' => $recommendations->post_miscarriage_status,
                'contraceptive_status' => $recommendations->contraceptive_status,
            ]);
            // Cek apakah data berhasil disimpan
            if ($consultations) {
                return redirect('/user/consultations/result')->with('toast_success', Auth::user()->name . ' konsultasi berhasil!');
            } else {
                return "gagal";
            }
        } 
    }
    
    public function result(){
        $result = Consultations::where('user_id',Auth::user()->id)->latest()->first();
        // dd($result);
        return view('user.consultations.result',compact('result'));
    }

    public function history(){
        $histories = Consultations::all()->where('user_id',Auth::user()->id);
        return view('user.consultations.index',compact('histories'));
    }
}
