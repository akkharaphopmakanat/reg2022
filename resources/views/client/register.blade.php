@extends('client.mainLayout')

@section('content')
<center>
<h2 style="color: #06223a;">ลงทะเบียน</h2>
</center>
@if($errors->any())
<div class="alert alert-danger" role="alert">
{{$errors->first()}}
</div>
@endif
    <form class="form-horizontal" action="" method="post">
    {{ csrf_field() }}
      <div class="container px-5 my-5">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="col-12 mb-3">
                <label class="form-label" for="เลขประจำตัวประชาชน">เลขประจำตัวประชาชน : </label>
                <input class="form-control" id="idcard" name ="idcard" type="text" placeholder="16599XXXXXXXX" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="เลขประจำตัวประชาชน:required">เลขประจำตัวประชาชน is required.</div>
            </div>
            <div class="row">
            
            <div class="col-2 mb-3">
            <label for="คำนำหน้า">คำนำหน้า : </label>
              <select class="form-select" id="prefix" name="prefix" aria-label="คำนำหน้า">
                <option value="เด็กหญิง">เด็กหญิง</option>
                <option value="นางสาว">นางสาว</option>
                <option value="นาย">นาย</option>
              </select>
            </div>
            <div class="col-5 mb-3">
                <label class="form-label" for="ชื่อ">ชื่อ : </label>
                <input class="form-control" id="name" name="name" type="text" placeholder="อานนท์" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="ชื่อ:required">ชื่อ is required.</div>
            </div>
            <div class="col-5 mb-3">
                <label class="form-label" for="นามสกุล">นามสกุล : </label>
                <input class="form-control" id="surname" name="surname" type="text" placeholder="มากมี" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="นามสกุล:required">นามสกุล is required.</div>
            </div>
            </div>
            <div class="row">
            <div class="col-2 mb-3">
                <label class="form-label d-block">เพศ : </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="gender" name="gender" type="radio" name="เพศ" value="หญิง" data-sb-validations="required" />
                    <label class="form-check-label" for="หญิง">หญิง</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="gender" name="gender" type="radio" name="เพศ" value="ชาย" data-sb-validations="required" />
                    <label class="form-check-label" for="ชาย">ชาย</label>
                </div>
                <div class="invalid-feedback" data-sb-feedback="เพศ:required">One option is required.</div>
            </div>
            <div class="col-2 mb-3">
                <label class="form-label" for="วันเดือนปีที่เกิด">วัน / เดือน / ปีที่เกิด (ค.ศ.) : </label>
                <input class="form-control" id="birthdate" name="birthdate" type="date" placeholder="วัน / เดือน / ปีที่เกิด" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="วันเดือนปีที่เกิด:required">วัน / เดือน / ปีที่เกิด is required.</div>
            </div>
            <div class="col-3 mb-3">
                <label class="form-label" for="หมายเลขโทรศัพท์">หมายเลขโทรศัพท์ : </label>
                <input class="form-control" id="tel" name="tel" type="text" placeholder="061XXXXXXX" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="หมายเลขโทรศัพท์:required">เบอร์โทรศัพท์ is required.</div>
            </div>
            <div class="col-5 mb-3">
                <label class="form-label" for="อีเมล">อีเมล : </label>
                <input class="form-control" id="email" name="email" type="email" placeholder="38332@chs.ac.th" data-sb-validations="required,email" />
                <div class="invalid-feedback" data-sb-feedback="อีเมล:required">อีเมล is required.</div>
                <div class="invalid-feedback" data-sb-feedback="อีเมล:email">อีเมล Email is not valid.</div>
            </div>
            </div>
            <div class="form-group">
              <div style="width:100%;text-align:center;">
              <button type="submit" class="btn btn-outline-primary">ลงทะเบียน</button>
              </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@stop