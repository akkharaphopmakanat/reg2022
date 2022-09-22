@extends('client.mainLayout')
@section('content')
<br>
<div class="card text-center">
  <div class="card-header">
    ข้อมูลพื้นฐาน
  </div>
  <div class="card-body">

  <form class="form-horizontal" action="" method="post">
  <div class="container">
  <div class="row">
  <div class="col-2 mb-3">
        <label class="form-label" for="เลขประจำตัวประชาชน">เลขประจำตัวประชาชน</label>
        <input class="form-control" disabled value="{{$idcard}}" id="idcard" name ="idcard" type="text"/>
    </div>
    <div class="col-2 mb-3">
        <label class="form-label" for="คำนำหน้าชื่อ">คำนำหน้าชื่อ</label>
        <input class="form-control" disabled value="{{$prefix}}" id="prefix" name ="prefix" type="text" >
    </div>
    <div class="col-2 mb-3">
        <label class="form-label" for="ชื่อ">ชื่อ</label>
        <input class="form-control" disabled value="{{$name}}" id="name" name ="name" type="text" >
    </div>
    <div class="col-2 mb-3">
        <label class="form-label" for="นามสกุล">นามสกุล</label>
        <input class="form-control" disabled value="{{$surname}}" id="idcard" name ="idcard" type="text"/>
    </div>
    <div class="col-2 mb-3">
            <label class="form-label" for="ชื่อภาษาอังกฤษ">ชื่อภาษาอังกฤษ</label>
            <input class="form-control"  value="" id="nameEN" name ="nameEN" type="text"/>
        </div>
        <div class="col-2 mb-3">
            <label class="form-label" for="นามสกุลภาษาอังกฤษ">นามสกุลภาษาอังกฤษ</label>
            <input class="form-control"  value="" id="surnameEN" name ="surnameEN" type="text"/>
        </div>

    </div>
  
  <div class="row">
    <div class="col-2 mb-3">
        <label class="form-label" for="เพศ">เพศ</label>
        <input class="form-control" disabled value="{{$gender}}" id="gender" name ="gender" type="text"/>
    </div>
    <div class="col-2 mb-3">
        <label class="form-label" for="ศาสนา">ศาสนา</label>
        <input class="form-control"  value="" id="religion" name ="religion" type="text"/>
    </div>
    <div class="col-2 mb-3">
        <label class="form-label" for="เชื้อชาติ">เชื้อชาติ</label>
        <input class="form-control"  value="" id="race" name ="race" type="text"/>
    </div>
    <div class="col-2 mb-3">
        <label class="form-label" for="สัญชาติ">สัญชาติ</label>
        <input class="form-control"  value="" id="nationality" name ="nationality" type="text"/>
    </div>
  </div>

  <div class="form-group">
              <div style="width:100%;text-align:center;">
              <button type="submit" class="btn btn-outline-primary">บันทึกข้อมูล</button>
              </div>
            </div>
</form>

</div>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>

<br>
<div class="card text-center">
  <div class="card-header">
    ข้อมูลบิดา
  </div>
  <div class="card-body">



  </div>
  <div class="card-footer text-muted">
  </div>
</div>

<br>
<div class="card text-center">
  <div class="card-header">
    ข้อมูลมารดา
  </div>
  <div class="card-body">



  </div>
  <div class="card-footer text-muted">
  </div>
</div>

<br>
<div class="card text-center">
  <div class="card-header">
    ข้อมูลผู้ปกครอง
  </div>
  <div class="card-body">



  </div>
  <div class="card-footer text-muted">
  </div>
</div>
@stop