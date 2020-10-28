<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\AcceptExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\accept;
use App\Models\detail_accept;
use App\Models\unit;

class apiitsupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ac=accept::all();
        return view('status', ['accepts' => $ac]);
    }

    public function unit()
    {
        $un=unit::all();
        return view('form')->with(['units' => $un]);
    }
    public function report()
    {
        $ac=accept::all();
        return view('report', ['accepts' => $ac]);
    }
    public function detail($id)
    {
        $ac=accept::find($id);
        $un=unit::all();
        $da=detail_accept::where('accept_id',$id)->get();
        return view('detail', ['detail_accepts' => $da,'accepts' => $ac,'units' => $un]);
    }
    public function process($id)
    {
        $ac=accept::find($id);
        $da=detail_accept::where('accept_id',$id)->get();
        return view('process', ['detail_accepts' => $da,'accepts' => $ac]);
    }
    public function success()
    {
        $ac=accept::all();
        return view('success', ['accepts' => $ac]);
    }
    public function approve()
    {
        $ac=accept::all();
        return view('approve', ['accepts' => $ac]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year=date("Y");
        $month=date("m");
        $find = accept::select('month','year')->orderByRaw('id DESC')->first();
        $count = accept::where('month','=',$month)->where('year','=',$year)->orderByRaw('id DESC')->count();
        
        $i=1;
        // \Log::info($count);
        if($count==0){
            $caseid = $year.$month."-0".$i;
        }else{
            if($count<9){
            $caseid = $year.$month."-0".($count+1);
            }else{
            $caseid = $year.$month."-".($count+1);
            }
        }
        $accept = new accept;
        $accept->caseId= $caseid;
        $accept->informant= $request->input('informant');
        $accept->position= $request->input('position');
        $accept->unit= $request->input('unit');
        $accept->location= $request->input('location');
        $accept->owner= $request->input('owner');
        $accept->topic= $request->input('topic');
        $accept->groupissue= $request->input('groupissue');
        $accept->type= $request->input('type');
        $accept->sapid= $request->input('sapid');
        $accept->result= $request->input('result');
        $accept->resultdetail= $request->input('resultdetail');
        $accept->coworker= $request->input('coworker');
        $accept->namecoworker= $request->input('namecoworker');
        $accept->status= $request->input('status');
        $accept->responsible= $request->input('responsible');
        $accept->month= $month;
        $accept->year= $year;
        $accept->save();
                return "Create episodes success";
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
        $ac=accept::find($id);
        $un=unit::all();
        return view('edit', ['accepts' => $ac,'units' => $un]);
    }
    public function edit_accept(Request $request,$id)
    {
        // \Log::info($id);
        $informant= $request->input('informant');
        $position= $request->input('position');
        $unit= $request->input('unit');
        $location= $request->input('location');
        $owner= $request->input('owner');
        $topic= $request->input('topic');
        $groupissue= $request->input('groupissue');
        $type= $request->input('type');
        $sapid= $request->input('sapid');
        $result= $request->input('result');
        $resultdetail= $request->input('resultdetail');
        $coworker= $request->input('coworker');
        $namecoworker= $request->input('namecoworker');
        $status= $request->input('status');
        $responsible= $request->input('responsible');
        
        $ac = accept::where('id',$id)
          ->update(['informant' => $informant,
                    'position' => $position,
                    'unit' => $unit,
                    'location' => $location,
                    'owner' => $owner,
                    'topic' => $topic,
                    'groupissue' => $groupissue,
                    'type' => $type,
                    'sapid' => $sapid,
                    'result' => $result,
                    'resultdetail' => $resultdetail,
                    'coworker' => $coworker,
                    'namecoworker' => $namecoworker,
                    'responsible' => $responsible]);
          return "update success";
    }
    public function change_status($id)
    {
        $ac=accept::find($id);
        return view('status', ['accepts' => $ac]);
    }
    public function edit_status(Request $request,$id)
    {
        // \Log::info($id);
        $status= $request->input('status');
        
        $ac = accept::where('id',$id)
          ->update(['status' => 'Complete']);
          return "update success";
    }
    public function update_approve(Request $request,$id)
    {
        // \Log::info($id);
        $status= $request->input('status');
        
        $ac = accept::where('id',$id)
          ->update(['approve' => 'Check']);
          return "update success";
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
    }
    public function export() 
    {
        return Excel::download(new AcceptExport, 'accept.xlsx');
    }
}
