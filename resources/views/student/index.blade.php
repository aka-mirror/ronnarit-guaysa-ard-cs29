@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">แสดงข้อมูลนักศึกษา</div>

                <div class="card-body">
                    <table class ="table table-striprd">
                <tr>
                    <th>คำนำหน้า</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>รหัสประจำตัว</th>
                    <th>รหัสกลุ่ม</th>
                    <th>สาขา</th>
                    <th>คณะ</th>
                </tr>
                @foreach ($student as $student)
                <tr>
                    <td>{{$student->stu_pre}}</td>
                    <td>{{$student->stu_fnmae}}</td>
                    <td>{{$student->stu_lname}}</td>
                    <td>{{$student->stu_code}}</td>
                    <td>{{$student->stu_group_id}}</td>
                    <td>{{$student->major_id}}</td> 
                    <td>{{$student->fac_id}}</td>  
                    <td><a herf="{{
                        url('/student/destroy/'.$student->id)
                    }}"</a></td>
                    </tr>
                        
                    @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
