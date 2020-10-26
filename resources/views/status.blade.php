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
<!-- {{$accepts}} -->
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
    @if (count($accepts) !=0 )
      @foreach ($accepts as $accept)
        @if ($accept->status == 'Ongoing')
    <tbody>
        <tr>
        <td></td>
        <td><a role="button"  href="{{url('/detail/'.$accept->id)}}">{{$accept->topic}}</a></td>
        <td>{{$accept->informant}}</td>
        <td>{{$accept->responsible}}</td>
        <td>{{$accept->created_at}}</td>
        <td>{{$accept->status}}</td>
        <th><div class="form-popup" id="myForm">
        <a class="btn btn-danger rounded-pill" href="{{url('/edit_status/'.$accept->id)}}" role="button">แก้ไข</a>
        <a class="btn btn-warning rounded-pill" href="{{url('/process_status/'.$accept->id)}}" role="button">ดำเนินงาน</a>
        <a class="btn btn-success rounded-pill" href="{{url('/status/'.$accept->id)}}" role="button">เสร็จสิ้น</a>
        <!-- onClick="this.form.action='accept_topic.php'; submit()" -->
        </div></th>
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