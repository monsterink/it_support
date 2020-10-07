@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

@endsection

@section('content')
    
    <div class="mt-4">
        <a href="{{url('/form')}}" role="button" class="btn btn-lg btn-block btn-outline-success">รับเรื่อง</a>
        <a href="{{url('/report')}}" role="button" class="btn btn-outline-danger btn-block btn-lg">รายงานการรับเรื่อง</a>
        <a href="{{url('/')}}" role="button" class="btn btn-outline-primary btn-block btn-lg">ปรับปรุงสถานะงาน</a>
        <a href="{{url('/')}}" role="button" class="btn btn-outline-dark btn-block btn-lg">ติดตามงาน</a>
        </div>
 
@endsection