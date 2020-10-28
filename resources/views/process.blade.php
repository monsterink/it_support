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
 <!-- {{$detail_accepts}}  -->
<!-- {{$accepts}} -->
<div class="mt-4">
<form action="{{url('/process_status')}}" method="post" class="was-validated">
        @csrf
        <div class="form-group">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark-star-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4zm4.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
        </svg>
            <label for="disabledTextInput">CaseId</label>
            <input type="text" id="disabledTextInput" class="form-control" value='{{$accepts->caseId}}' readonly>
        </div>
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
         <input type="hidden" id="id" name="accept_id" value="{{$accepts->id}}">
        </form>

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
    </div>     

@endsection