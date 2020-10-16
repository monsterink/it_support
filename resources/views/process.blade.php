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
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            <label for="FormGroupInformant">วัน/เดือน/ปี</label>
            <input type="date" class="form-control border border-warning" id="myDate" name="date">
        </div>
        <div class="form-group">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-inboxes-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393z"/>
            </svg>
            <label for="FormGroupTopic">รายละเอียด</label>
            <textarea class="form-control border border-warning" id="Topic" rows="5" name="Topic"></textarea>
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
    <script>
function myFunction() {
  document.getElementById("myDate").value = "2014-02-09";
}
</script>

@endsection