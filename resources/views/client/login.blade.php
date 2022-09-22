@extends('client.mainLayout')

@section('content')
</br>
<div class="card text-center">
  <div class="card-header">
    เข้าสู่ระบบ
  </div>
  <div class="card-body">

  @if($errors->any())
<div class="alert alert-danger" role="alert">
{{$errors->first()}}
</div>
@endif
    <form class="form-horizontal" action="" method="post">
    {{ csrf_field() }}
      <div class="container px-5 my-5">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">.
            <center>
            <div class="col-8 mb-3">
                <label class="form-label" for="เลขประจำตัวประชาชน">เลขประจำตัวประชาชน : </label>
                <input class="form-control" id="idcard" name ="idcard" type="text" placeholder="16599XXXXXXXX" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="เลขประจำตัวประชาชน:required">เลขประจำตัวประชาชน is required.</div>
            </div>
            <div class="row">
            </center>
            <center>
            <div class="col-8 mb-3">
                <label class="form-label" for="วันเดือนปีที่เกิด">วัน / เดือน / ปีที่เกิด (ค.ศ.) : </label>
                <input class="form-control" id="birthdate" name="birthdate" type="date" placeholder="วัน / เดือน / ปีที่เกิด" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="วันเดือนปีที่เกิด:required">วัน / เดือน / ปีที่เกิด is required.</div>
            </div>
            </center>
            </div>
            <div class="form-group ">
              <div style="width:100%;text-align:center;">
              <button type="submit" class="btn btn-outline-primary ">เข้าสู่ระบบ</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

  </div>
  <div class="card-footer text-muted">
    
  </div>
</div>



@stop