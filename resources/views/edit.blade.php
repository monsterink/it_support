@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<style>
.label {
  color: white;
  padding: 8px;
}
</style>
<!-- {{$accepts}} -->
<div class="mt-4">
        <form action="{{url('/edit_status/'.$accepts->id)}}" method="post" class="was-validated">
        @csrf
        <div class="form-group">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bookmark-star-fill " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M4 0a2 2 0 0 0-2 2v13.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4zm4.16 4.1a.178.178 0 0 0-.32 0l-.634 1.285a.178.178 0 0 1-.134.098l-1.42.206a.178.178 0 0 0-.098.303L6.58 6.993c.042.041.061.1.051.158L6.39 8.565a.178.178 0 0 0 .258.187l1.27-.668a.178.178 0 0 1 .165 0l1.27.668a.178.178 0 0 0 .257-.187L9.368 7.15a.178.178 0 0 1 .05-.158l1.028-1.001a.178.178 0 0 0-.098-.303l-1.42-.206a.178.178 0 0 1-.134-.098L8.16 4.1z"/>
        </svg>
            <label for="disabledTextInput">CaseId</label>
            <input type="text" id="disabledTextInput" class="form-control" value='{{$accepts->caseId}}' readonly>
        </div>
        <div class="form-group ">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <label for="FormGroupInformant">ชื่อผู้แจ้ง</label>
            <input type="text" class="form-control border border-warning" id="ionformant" name="informant" value='{{$accepts->informant}}' required>
        </div>
        
<div class="row">
    <div class="col">
        <div class="form-group">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-briefcase-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
        <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
        </svg>
        <label for="FormPosition">ตำแหน่ง</label>
            <select class="form-control border border-warning" id="position" name="position" required>
            <option>{{$accepts->position}}</option>
            <option value="อาจารย์แพทย์">อาจารย์แพทย์</option>
            <option value="Resident/Fellow">Resident/Fellow</option>
            <option value="นักศึกษาแพทย์">นักศึกษาแพทย์</option>
            <option value="พยาบาล">พยาบาล</option>
            <option value="เจ้าหน้าที่">เจ้าหน้าที่</option>
            <option value="บุคคลภายนอกภาคฯ">บุคคลภายนอกภาคฯ</option>
            <option value="อื่นๆ">อื่นๆ</option>
            </select>
        </div>
    </div>
    <div class="col">
    <div class="form-group">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-briefcase-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"/>
        <path fill-rule="evenodd" d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"/>
        </svg>
            <label for="FormGroupUnit">หน่วยงาน/สังกัด</label>
            <select class="form-control border border-warning" id="unit" name="unit" required>
            <!-- <option>{{$accepts->unit}}</option> -->
            @foreach ($units as $unit) 
                <option value="{{$unit->id}}"{{ old('id') == $accepts->unit ? "selected" :""}}>{{$unit->name_unit}}</option>
            @endforeach
            </select>
        </div>
    </div>
</div>
        
<div class="row">
    <div class="col">
    <div class="form-group">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <label for="FormLocation">สถานที่</label>
            <select class="form-control border border-warning" id="location" name="location" required>
            <option>{{$accepts->location}}</option>
            <option value="อัษฎางค์ 1">อัษฎางค์ 1</option>
            <option value="อัษฎางค์ 10">อัษฎางค์ 10</option>
            <option value="อัษฎางค์ 13">อัษฎางค์ 13</option>
            </select>
        </div>
    </div>
    <div class="col">
    <div class="form-group">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-building text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
        <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
        </svg>
            <label for="FormOwner">เจ้าของ</label>
            <select class="form-control border border-warning" id="owner" name="owner" required>
            <option>{{$accepts->owner}}</option>
            <option value="คณะฯ">คณะฯ</option>
            <option value="ภาควิชาฯ">ภาควิชาฯ</option>
            <option value="ส่วนตัว">ส่วนตัว</option>
            <option value="สาขาวิชาฯ">สาขาวิชาฯ</option>
            </select>
        </div>
    </div>
</div>

        <div class="form-group">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-textarea-t text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M1.5 2.5A1.5 1.5 0 0 1 3 1h10a1.5 1.5 0 0 1 1.5 1.5v3.563a2 2 0 0 1 0 3.874V13.5A1.5 1.5 0 0 1 13 15H3a1.5 1.5 0 0 1-1.5-1.5V9.937a2 2 0 0 1 0-3.874V2.5zm1 3.563a2 2 0 0 1 0 3.874V13.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V9.937a2 2 0 0 1 0-3.874V2.5A.5.5 0 0 0 13 2H3a.5.5 0 0 0-.5.5v3.563zM2 7a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm12 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            <path d="M11.434 4H4.566L4.5 5.994h.386c.21-1.252.612-1.446 2.173-1.495l.343-.011v6.343c0 .537-.116.665-1.049.748V12h3.294v-.421c-.938-.083-1.054-.21-1.054-.748V4.488l.348.01c1.56.05 1.963.244 2.173 1.496h.386L11.434 4z"/>
            </svg>
            <label for="FormGroupTopic">เรื่อง</label>
            <textarea class="form-control border border-warning" id="topic" rows="5" name="topic" required>{{$accepts->topic}}</textarea>
        </div>
        
        <div class="form-group">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-task text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
            <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
            </svg>
            <label for="FormGroupIssue">กลุ่มปัญหา</label>
            <select class="form-control border border-warning" id="groupissue" name="groupissue" norequired>
            <option>{{$accepts->groupissue}}</option>
            <option value="ด้าน Hardware">ด้าน Hardware</option>
            <option value="ด้าน Software">ด้าน Software</option>
            <option value="ด้าน Network">ด้าน Network</option>
            <option value="ด้าน Virus">ด้าน Virus</option>
            <option value="ด้านให้คำปรึกษา">ด้านให้คำปรึกษา</option>
            <option value="ด้านถ่ายภาพ/ ขอภาพ">ด้านถ่ายภาพ/ ขอภาพ</option>
            <option value="ด้านโสตทัศนูปกรณ์">ด้านโสตทัศนูปกรณ์</option>
            <option value="ด้าน Presentation/ Graphic">ด้าน Presentation/ Graphic</option>
            <option value="ด้าน Change Request ">ด้าน Change Request </option>
            </select>
        </div>

<div class="row">
    <div class="col">
    <div class="form-group">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
            <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
            </svg>
            <label for="FormType">ชนิดของอุปกรณ์</label>
            <select class="form-control border border-warning" id="type" name="type">
            <option>{{$accepts->type}}</option>
            <option value="Notebook">Notebook</option>
            <option value="Printer">Printer</option>
            <option value="Scanner">Scanner</option>
            <option value="เครื่องคอมพิวเตอร์">เครื่องคอมพิวเตอร์</option>
            <option value="มือถือ/ Tablet">มือถือ/ Tablet</option>
            <option value="สื่อบันทึกข้อมูล (Flash Drive/ External HDD/ Card)">สื่อบันทึกข้อมูล (Flash Drive/ External HDD/ Card)</option>
            <option value="อื่นๆ">อื่นๆ</option>
            </select>
        </div>
    </div>
    <div class="col">
    <div class="form-group ">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"/>
            <path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
            </svg>
            <label for="FormSapid">SAPID</label>
            <input type="text" class="form-control border border-warning" id="sapid" name="sapid" value='{{$accepts->sapid}}'>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
    <div class="form-group">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <label for="FormResult">Result</label>
            <select class="form-control border border-warning" id="result" name="result">
            <option>{{$accepts->result}}</option>
            <option value="แก้ไขได้สำเร็จ">แก้ไขได้สำเร็จ</option>
            <option value="แก้ไขไม่ได้">แก้ไขไม่ได้</option>
            <option value="ส่งซ่อมบริษัท">ส่งซ่อมบริษัท</option>
            <option value="ส่งต่อทีม IT">ส่งต่อทีม IT</option>
            <option value="ส่งต่อศูนย์คอมฯ">ส่งต่อศูนย์คอมฯ</option>
            </select>
        </div>
    </div>
    <div class="col">
    <div class="form-group ">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-square-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <label for="FormResultDetail">Result Detail</label>
            <input type="text" class="form-control border border-warning" id="resultdetail" name="resultdetail" value='{{$accepts->resultdetail}}'>
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
    <div class="form-group">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <label for="FormCoWorker">ส่งงานต่อ/ร่วมงาน</label>
            <select class="form-control border border-warning" id="coworker" name="coworker">
            <option>{{$accepts->coworker}}</option>
            <option value="ส่งงานต่อ">ส่งงานต่อ</option>
            <option value="ร่วมงาน">ร่วมงาน</option>
            </select>
        </div>
    </div>
    <div class="col">
    <div class="form-group ">
    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <label for="FormGroupUnit">ชื่อ</label>
            <select class="form-control border border-warning" id="namecoworker" name="namecoworker">
            <option>{{$accepts->namecoworker}}</option>
            <option value="นายโสภณ นิธิยานันท์">นายโสภณ นิธิยานันท์</option>
            <option value="นายพูลทรัพย์ เที่ยงรอด">นายพูลทรัพย์ เที่ยงรอด</option>
            <option value="นางปนัดดา เที่ยงรอด">นางปนัดดา เที่ยงรอด</option>
            <option value="น.ส.ศันสนีย์ สุ่มกล่ำ">น.ส.ศันสนีย์ สุ่มกล่ำ</option>
            <option value="นายทศพล งามวิชชุกร">นายทศพล งามวิชชุกร</option>
            <option value="น.ส.อชิรญา อนุตรวัมนกุล">น.ส.อชิรญา อนุตรวัมนกุล</option>
            </select>
        </div>
    </div>
    <input type="hidden" id="status" name="status" value="Ongoing">
    <input type="hidden" id="id" name="responsible" value="อชิรญา อนุตรวัฒนกุล">
</div>
        <div class="col-md-12 text-center mt-4">
            <button type="submit" class="btn btn-primary">บันทึก</button>
            <a href="{{url('/status')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
         </div>
        </form>
        </div>
@endsection

