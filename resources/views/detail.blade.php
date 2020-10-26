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
        @foreach ($detail_accepts as $key=>$detail_accept) 
        <tbody>
            <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$detail_accept->date}}</td>
            <td>{{$detail_accept->time}}</td>
            <td>{{$detail_accept->Topic}}</td>
            </tr>
        </tbody>
        @endforeach
        </table>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">บันทึก</button>
            <a href="{{url('/report')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
         </div>
    </div>     
@endsection