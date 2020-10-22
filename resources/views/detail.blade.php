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
  text-align: center;
}
</style>
<!-- {{$detail_accepts}} -->
<div class="mt-4">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ลำดับที่</th>
            <th scope="col">วัน/เดือน/ปี</th>
            <th scope="col">เวลา</th>
            <th scope="col">รายละเอียด</th>
            </tr>
        </thead>
      
        <tbody>
            <tr>
            <th scope="row">{{$detail_accepts->id}}</th>
            <td>{{$detail_accepts->date}}</td>
            <td>{{$detail_accepts->time}}</td>
            <td>{{$detail_accepts->Topic}}</td>
            </tr>
        </tbody>
        </table>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">บันทึก</button>
            <a href="{{url('/report')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
         </div>
    </div>     
@endsection