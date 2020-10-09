@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div class="mt-4">
        <form action="{{url('/form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="FormGroupInformant">ชื่อผู้แจ้ง</label>
            <input type="text" class="form-control" id="Informant" name="Informant">
        </div>
        
        <div class="form-group">
            <label for="FormGroupNotifier">ผู้รับแจ้ง</label>
            <select class="form-control" id="Notifier" name="Notifier">
            <option>กรุณาเลือก</option>
            <option value="โสภณ นิธิยานันท์">โสภณ นิธิยานันท์</option>
            <option value="พูลทรัพย์ เที่ยงรอด">พูลทรัพย์ เที่ยงรอด</option>
            <option value="ศันสนีย์ สุ่มกล่ำ">ศันสนีย์ สุ่มกล่ำ</option>
            <option value="ปนัดดา เที่ยงรอด">ปนัดดา เที่ยงรอด</option>
            <option value="อชิรญา อนุตรวัฒนกุล">อชิรญา อนุตรวัฒนกุล</option>
            </select>
        </div>

        <div class="input-group mb-3">
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="โสภณ นิธิยานันท์">
            <label class="form-check-label" for="inlineCheckbox1">โสภณ นิธิยานันท์</label>
            </div>
        </div>
        <div class="input-group mb-3">
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="พูลทรัพย์ เที่ยงรอด">
            <label class="form-check-label" for="inlineCheckbox1">พูลทรัพย์ เที่ยงรอด</label>
            </div>
        </div> <div class="input-group mb-3">
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="ศันสนีย์ สุ่มกล่ำ">
            <label class="form-check-label" for="inlineCheckbox1">ศันสนีย์ สุ่มกล่ำ</label>
            </div>
        </div> <div class="input-group mb-3">
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="ปนัดดา เที่ยงรอด">
            <label class="form-check-label" for="inlineCheckbox1">ปนัดดา เที่ยงรอด</label>
            </div>
        </div> <div class="input-group mb-3">
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="อชิรญา อนุตรวัฒนกุล">
            <label class="form-check-label" for="inlineCheckbox1">อชิรญา อนุตรวัฒนกุล</label>
            </div>
        </div>

        <div class="form-group">
            <label for="FormGroupTopic">เรื่อง</label>
            <textarea class="form-control" id="Topic" rows="5" name="Topic"></textarea>
        </div>
        <div class="form-group">
            <label for="FormGroupTell">เบอร์ติดต่อกลับ</label>
            <input type="tel" class="form-control" id="Tel" name="Tel">
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">บันทึก</button>
            <a href="{{url('/home')}}" class="btn btn-secondary" role="button">ย้อนกลับ</a>
         </div>
        </form>
</div>
@endsection

