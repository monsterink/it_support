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
<!-- {{$accepts}} -->
<div class="mt-4">
        <table class="table table-primary table-striped">
        <thead>
            <tr>
            <th scope="col" width='300px'>CaseId</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$accepts->caseId}}</td>
            </tr>
        </tbody>
        </table>

        <table class="table table-primary table-striped">
        <thead>
            <tr>
            <th scope="col" width='300px'>ผู้แจ้ง</th>
            <th scope="col" width='300px'>ตำแหน่ง</th>
            <th scope="col" width='300px'>หน่วยงาน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$accepts->informant}}</td>
            <td>{{$accepts->position}}</td>
            <td>{{$units[$accepts->unit-1]->name_unit}}</td>
            </tr>
        </tbody>
        </table>

        <table class="table table-primary table-striped">
        <thead>
            <tr>
            <th scope="col" width='300px'>ผู้รับแจ้ง</th>
            <th scope="col" width='300px'>สถานที่</th>
            <th scope="col" width='300px'>เจ้าของ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$accepts->responsible}}</td>
            <td>{{$accepts->location}}</td>
            <td>{{$accepts->owner}}</td>
            </tr>
        </tbody>
        </table>

        <table class="table table-primary table-striped">
        <thead>
            <tr>
            <th scope="col" width='300px'>เรื่อง</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$accepts->topic}}</td>
            </tr>
        </tbody>
        </table>

        <table class="table table-primary table-striped">
        <thead>
            <tr>
            <th scope="col" width='300px'>กลุ่มปัญหา</th>
            <th scope="col" width='300px'>ชนิดของปัญหา</th>
            <th scope="col" width='300px'>SapId</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$accepts->groupissue}}</td>
            <td>{{$accepts->type}}</td>
            <td>{{$accepts->sapid}}</td>
            </tr>
        </tbody>
        </table>

        <table class="table table-primary table-striped">
        <thead>
            <tr>
            <th scope="col" width='500px'>Result</th>
            <th scope="col" width='500px'>ResultDetail</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$accepts->result}}</td>
            <td>{{$accepts->resultdetail}}</td>
            </tr>
        </tbody>
        </table>

        <table class="table table-primary table-striped">
        <thead>
            <tr>
            <th scope="col" width='500px'>ส่งงานต่อ/ร่วมงาน</th>
            <th scope="col" width='500px'>ชื่อผู้ร่วมงาน</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$accepts->coworker}}</td>
            <td>{{$accepts->namecoworker}}</td>
            </tr>
        </tbody>
        </table>

        <table class="table table-success table-striped">
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
            @foreach ($detail_accepts as $key=>$detail_accept) 
            <th>{{$key+1}}</th>
            <td>{{$detail_accept->date}}</td>
            <td>{{$detail_accept->time}}</td>
            <td>{{$detail_accept->Topic}}</td>
           @endforeach  
           </tr>
        </tbody>
        </table>

        <table class="table table-danger table-striped">
        <thead>
            <tr>
            <th scope="col" width='500px'>Approve</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>{{$accepts->approve}}</td>
            </tr>
        </tbody>
        </table>
        <div class="col-md-12 text-center">
            <a href="{{url('/home')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
         </div>
    </div>     
@endsection