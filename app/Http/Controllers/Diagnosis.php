<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DiagnosisData;

class Diagnosis extends Controller
{
    public function index()
    {
        $diagnosisData = DiagnosisData::paginate(10);
        return view('DiagnosisList',compact('diagnosisData'));
    }
    public function addNewData(Request $request)
    {
        $new_data = new DiagnosisData();
        $new_data->qualitative_index = $request->input('qualitative_index');
        $new_data->big_category = $request->input('big_category');
        $new_data->mid_category = $request->input('mid_category');
        $new_data->small_category = $request->input('small_category');
        $new_data->promotion_title = $request->input('promotion_title');
        $new_data->promotion = $request->input('promotion');
        $new_data->qual_quan = $request->input('qual_quan');
        $new_data->current = $request->input('current');
        $new_data->future = $request->input('future');
        $new_data->reason = $request->input('reason');
        $new_data->action = $request->input('action');
        $new_data->save();
        return redirect(route("home"));
    }
    public function deleteData($id)
    {
        DiagnosisData::where('id', $id)->delete();
        return back();
    }
    public function showData($id)
    {
        $data = DiagnosisData::where('id', $id)->get();
       // dd(compact('data'));
        return view('DiagnosisUpdate',compact('data'));
    }
    public function updateData(Request $request)
    {
        $options = [
            'qualitative_index' => $request->input('qualitative_index'),
            'big_category' => $request->input('big_category'),
            'mid_category' => $request->input('mid_category'),
            'small_category' => $request->input('small_category'),
            'promotion_title' => $request->input('promotion_title'),
            'promotion' => $request->input('promotion'),
            'qual_quan' => $request->input('qual_quan'),
            'current' => $request->input('current'),
            'future' => $request->input('future'),
            'action' => $request->input('action'),
        ];
        DiagnosisData::where('id',  $request->input('id'))->update($options);
        return redirect(route("home"));
    }
}
