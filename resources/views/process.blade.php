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
<form action="{{url('/form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="FormGroupInformant">วัน/เดือน/ปี</label>
            <input type="text" class="form-control" id="Informant" name="Informant">
        </div>
        <div class="form-group">
            <label for="FormGroupTopic">รายละเอียด</label>
            <textarea class="form-control" id="Topic" rows="5" name="Topic"></textarea>
        </div>
        </form>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">ลำดับที่</th>
            <th scope="col">วัน/เดือน/ปี</th>
            <th scope="col">รายละเอียด</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>2020-10-07</td>
            <td>Check อาการ</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>2020-10-08</td>
            <td>หาอุปกรณ์</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>2020-10-09</td>
            <td>เสร็จสิ้น</td>
            </tr>
        </tbody>
        </table>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">บันทึก</button>
            <a href="{{url('/status')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
         </div>
    </div>     
@endsection