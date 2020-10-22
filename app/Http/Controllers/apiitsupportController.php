<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
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
        $da=detail_accept::find($id);
        return view('detail', ['detail_accepts' => $da]);
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
        
        $ac = accept::create(request()->all());//create database ผ่าน model
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
        //
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
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
