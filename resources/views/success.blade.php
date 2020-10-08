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
    <table class="table table-striped table-success ">
    <thead>
        <tr>
        <th scope="col">ลำดับที่</th>
        <th scope="col">เรื่อง</th>
        <th scope="col">ผู้รับแจ้ง</th>
        <th scope="col">ผู้รับผิดชอบ</th>
        <th scope="col">วันที่รับแจ้ง</th>
        <th scope="col">สถานะ</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td><a role="button"  href="{{url('/detail')}}">ซ่อมคอม</a></td>
        <td>ศันสนีย์ สุ่มกล่ำ</td>
        <td>โสภณ นิธิยานันท์</td>
        <td>2020-10-07</td>
        <td>เสร็จสิ้น</td>
        </tr>
    </tbody>
    </table>
    
    <div class="col-md-12 text-center">
    <a href="{{url('/home')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
    </div>
    </div>
@endsection