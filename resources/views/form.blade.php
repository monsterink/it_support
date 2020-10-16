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
<div class="mt-4">
        <form action="{{url('/form')}}" method="post" class="was-validated">
        @csrf
        <div class="form-group ">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>
            <label for="FormGroupInformant">ชื่อผู้แจ้ง</label>
            <input type="text" class="form-control border border-warning" id="Informant" name="Informant" required>
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
            <option></option>
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
            <option></option>
            <option value="หน่วยบริหารสำนักงาน">หน่วยบริหารสำนักงาน</option>
            <option value="หน่วยนโยบายและแผน">หน่วยนโยบายและแผน</option>
            <option value="หน่วยบุคคลและการจัดการความรู้">หน่วยบุคคลและการจัดการความรู้</option>
            <option value="หน่วยงบประมาณ พัสดุและการเงิน">หน่วยงบประมาณ พัสดุและการเงิน</option>
            <option value="สาขาวิชาการบริบาลผู้ป่วยนอก">สาขาวิชาการบริบาลผู้ป่วยนอก</option>
            <option value="สาขาวิชาความดันโลหิตสูง">สาขาวิชาความดันโลหิตสูง</option>
            <option value="สาขาวิชามะเร็งวิทยา">สาขาวิชามะเร็งวิทยา</option>
            <option value="สาขาวิชาต่อมไร้ท่อและเมตะบอลิสม">สาขาวิชาต่อมไร้ท่อและเมตะบอลิสม</option>
            <option value="สาขาวิชาโรคติดเชื้อและอายุรศาสตร์เขตร้อน">สาขาวิชาโรคติดเชื้อและอายุรศาสตร์เขตร้อน</option>
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
            <option></option>
            <option value="หน่วยบริหารสำนักงาน">หน่วยบริหารสำนักงาน</option>
            <option value="หน่วยนโยบายและแผน">หน่วยนโยบายและแผน</option>
            <option value="หน่วยบุคคลและการจัดการความรู้">หน่วยบุคคลและการจัดการความรู้</option>
            <option value="หน่วยงบประมาณ พัสดุและการเงิน">หน่วยงบประมาณ พัสดุและการเงิน</option>
            <option value="สาขาวิชาการบริบาลผู้ป่วยนอก">สาขาวิชาการบริบาลผู้ป่วยนอก</option>
            <option value="สาขาวิชาความดันโลหิตสูง">สาขาวิชาความดันโลหิตสูง</option>
            <option value="สาขาวิชามะเร็งวิทยา">สาขาวิชามะเร็งวิทยา</option>
            <option value="สาขาวิชาต่อมไร้ท่อและเมตะบอลิสม">สาขาวิชาต่อมไร้ท่อและเมตะบอลิสม</option>
            <option value="สาขาวิชาโรคติดเชื้อและอายุรศาสตร์เขตร้อน">สาขาวิชาโรคติดเชื้อและอายุรศาสตร์เขตร้อน</option>
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
            <option></option>
            <option value="คณะฯ">คณะฯ</option>
            <option value="ภาควิชาฯ">ภาควิชาฯ</option>
            <option value="ส่วนตัว">ส่วนตัว</option>
            <option value="สาขาวิชาฯ">สาขาวิชาฯ</option>
            </select>
        </div>
    </div>
</div>

        <div class="form-group">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-inboxes-fill text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zM3.81.563A1.5 1.5 0 0 1 4.98 0h6.04a1.5 1.5 0 0 1 1.17.563l3.7 4.625a.5.5 0 0 1 .106.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393z"/>
            </svg>
            <label for="FormGroupTopic">เรื่อง</label>
            <textarea class="form-control border border-warning" id="Topic" rows="5" name="Topic" required></textarea>
        </div>
        
        <div class="form-group">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-task text-info" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z"/>
            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z"/>
            <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z"/>
            </svg>
            <label for="FormGroupIssue">กลุ่มปัญหา</label>
            <select class="form-control border border-warning" id="groupissue" name="groupissue" norequired>
            <option></option>
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
            <option></option>
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
            <input type="text" class="form-control border border-warning" id="sapid" name="sapid">
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
            <option></option>
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
            <input type="text" class="form-control border border-warning" id="resultdetail" name="resultdetail">
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
            <option></option>
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
            <select class="form-control border border-warning" id="unit" name="unit">
            <option></option>
            <option value="นายโสภณ นิธิยานันท์">นายโสภณ นิธิยานันท์</option>
            <option value="นายพูลทรัพย์ เที่ยงรอด">นายพูลทรัพย์ เที่ยงรอด</option>
            <option value="นางปนัดดา เที่ยงรอด">นางปนัดดา เที่ยงรอด</option>
            <option value="น.ส.ศันสนีย์ สุ่มกล่ำ">น.ส.ศันสนีย์ สุ่มกล่ำ</option>
            <option value="นายทศพล งามวิชชุกร">นายทศพล งามวิชชุกร</option>
            <option value="น.ส.อชิรญา อนุตรวัมนกุล">น.ส.อชิรญา อนุตรวัมนกุล</option>
            </select>
        </div>
    </div>
</div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">บันทึก</button>
            <a href="{{url('/home')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
         </div>
        </form>
        </div>
@endsection

