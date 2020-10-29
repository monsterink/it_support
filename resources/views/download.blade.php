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
<form action="{{url('/process_status')}}" method="post" class="was-validated">
        @csrf
        <div class="row">
    <div class="col">
    <div class="form-group">
            <label for="FormLocation">ประเภทงาน</label>
            <select class="form-control border border-warning" id="location" name="location" required>
            <option></option>
            <option value="Ongoing">อัษฎางค์ 1</option>
            <option value="Complete">อัษฎางค์ 10</option>
            <option value="อัษฎางค์ 13">อัษฎางค์ 13</option>
            </select>
        </div>
    </div>
    <div class="col">
    <div class="form-group">
            <label for="FormOwner">เดือน</label>
            <select class="form-control border border-warning" id="owner" name="owner" required>
            <option></option>
            <option value="คณะฯ">คณะฯ</option>
            <option value="ภาควิชาฯ">ภาควิชาฯ</option>
            <option value="ส่วนตัว">ส่วนตัว</option>
            <option value="สาขาวิชาฯ">สาขาวิชาฯ</option>
            </select>
        </div>
    </div>
    <div class="col">
    <div class="form-group">
            <label for="FormOwner">ปี</label>
            <select class="form-control border border-warning" id="owner" name="owner" required>
            <option></option>
            <option value="คณะฯ">คณะฯ</option>
            <option value="ภาควิชาฯ">ภาควิชาฯ</option>
            <option value="ส่วนตัว">ส่วนตัว</option>
            <option value="สาขาวิชาฯ">สาขาวิชาฯ</option>
            </select>
            </div>
        </div>
    </div>
        </form>
        <div class="col-md-12 text-center">
    <a href="{{url('/export')}}" class="btn btn-primary" role="button">ดาวน์โหลด</a>
    <a href="{{url('/home')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
    </div>

<table class="table table-striped table-danger mt-4">
    <thead>
        <tr>
        <th scope="col">CaseId</th>
        <th scope="col">ผู้แจ้ง</th>
        <th scope="col">ผู้รับผิดชอบ</th>
        <th scope="col">วันและเวลา</th>
        <th scope="col">สถานะ</th>
        </tr>
    </thead>
    @if (count($accepts) !=0)
      @foreach ($accepts as $accept) 
        <tbody>
            <tr>
            <td><a role="button"  href="{{url('/detail/'.$accept->id)}}">{{$accept->caseId}}</a></td>
            <td>{{$accept->informant}}</td>
            <td>{{$accept->responsible}}</td>
            <td>{{$accept->created_at}}</td>
            <td>{{$accept->status}}</td>
            </tr>
        </tbody>
      @endforeach
    @endif
    </table>
    </div>
@endsection