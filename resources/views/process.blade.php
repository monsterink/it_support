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
<!-- {{$accept_id}} -->
<div class="mt-4">
<form action="{{url('/process_status')}}" method="post" class="was-validated">
        @csrf
        <div class="form-group">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
        </svg>
        <label for="FormGroupTopic">วัน/เดือน/ปี</label>
            <input class="form-control border border-warning" type="date" id="example-datetime-local-input" name="date" required>
        </div>
        <div class="form-group">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-stopwatch-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16 7 7 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm2 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z"/>
        </svg>
        <label for="FormGroupTopic">เวลา</label>
            <input class="form-control border border-warning" type="time" id="example-datetime-local-input"name="time" required>
        </div>
        <div class="form-group">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-inboxes-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393z"/>
            </svg>
            <label for="FormGroupTopic">รายละเอียด</label>
            <textarea class="form-control border border-warning" id="Topic" rows="5" name="Topic" required></textarea>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">บันทึก</button>
            <a href="{{url('/status')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
         </div>
         <input type="hidden" id="id" name="accept_id" value="{{$accept_id}}">
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
    </div>     

@endsection