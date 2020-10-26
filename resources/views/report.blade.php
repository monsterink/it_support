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
        <th scope="col">CaseId</th>
        <th scope="col">เรื่อง</th>
        <th scope="col">ผู้แจ้ง</th>
        <th scope="col">ผู้รับผิดชอบ</th>
        <th scope="col">วันและเวลา</th>
        <th scope="col">สถานะ</th>
        </tr>
    </thead>
    @if (count($accepts) !=0)
      @foreach ($accepts as $accept) 
      @if ($accept->status=="Ongoing")
        <tbody>
            <tr>
            <th scope="row"></th>
            <td><a role="button"  href="{{url('/detail/'.$accept->id)}}">{{$accept->topic}}</a></td>
            <td>{{$accept->informant}}</td>
            <td>{{$accept->responsible}}</td>
            <td>{{$accept->created_at}}</td>
            <td>{{$accept->status}}</td>
            </tr>
        </tbody>
        @endif
      @endforeach
    @endif
    </table>
    
    <div class="col-md-12 text-center">
    <a href="{{url('/home')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
    </div>
    </div>
@endsection