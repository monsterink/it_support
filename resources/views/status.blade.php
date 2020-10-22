@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
<style>
table th {
  text-align: center;
}
table td {
  text-align: left;
}
</style>
<div class="mt-4">
    <table class="table table-striped table-warning ">
    <thead>
        <tr>
        <th scope="col">ลำดับที่</th>
        <th scope="col">เรื่อง</th>
        <th scope="col">ผู้แจ้ง</th>
        <th scope="col">ผู้รับผิดชอบ</th>
        <th scope="col">สถานะ</th>
        <th scope="col"></th>
        </tr>
    </thead>
    @if (count($accepts) !=0)
    @foreach ($accepts as $accept) 
    <tbody>
        <tr>
        <th scope="row">{{$accept->id}}</th>
        <td>{{$accept->topic}}</td>
        <td>{{$accept->informant}}</td>
        <td>โสภณ นิธิยานันท์</td>
        <td>กำลังดำเนินการ</td>
        <th><div class="form-popup" id="myForm">
        <a class="btn btn-danger rounded-pill" href="{{url('/edit_status')}}" role="button">แก้ไข</a>
        <a class="btn btn-warning rounded-pill" href="{{url('/process_status/'.$accept->id)}}" role="button">ดำเนินงาน</a>
        <a class="btn btn-success rounded-pill" href="#" role="button">เสร็จสิ้น</a>
        </div></th>
        </tr>
    </tbody>
    @endforeach
    @endif
    </table>
    
    <div class="col-md-12 text-center">
    <a href="{{url('/home')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
    </div>
    </div>
 
@endsection