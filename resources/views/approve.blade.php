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
<div class="mt-4">
<input class="form-control" type="text" id="search" name="search" placeholder="Search..">
</div>
<div class="mt-4">
    <table class="table table-striped table-primary ">
    <thead>
    <tr>
        <th scope="col">CaseId</th>
        <th scope="col">ผู้แจ้ง</th>
        <th scope="col">ผู้รับผิดชอบ</th>
        <th scope="col">วันและเวลา</th>
        <th scope="col">Approve</th>
        </tr>
    </thead>
    @if (count($accepts) !=0)
      @foreach ($accepts as $accept) 
      @if ($accept->approve == "Check")
    <tbody>
    <tr>
        <td><a role="button"  href="{{url('/detail/'.$accept->id)}}">{{$accept->caseId}}</a></td>
        <td>{{$accept->informant}}</td>
        <td>{{$accept->responsible}}</td>
        <td>{{$accept->created_at}}</td>
        <td>{{$accept->approve}}</td>
    </tr>
    </tbody>
      @endif
      @endforeach
    @endif
    </table>
    
    <div class="col-md-12 text-center">
    <a href="{{url('/export')}}" class="btn btn-primary" role="button">ดาวน์โหลด</a>
    <a href="{{url('/home')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
    </div>
   
    
@endsection