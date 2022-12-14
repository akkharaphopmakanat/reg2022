<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <!--. <img src="{{ asset('storage/banner.jpg') }}" height="20%" width="100%"> -->
  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #000066;" >
  
  <div class="container-fluid">
    <a class="navbar-brand" href="/">โรงเรียนเฉลิมขวัญสตรี</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">หน้าหลัก</a>
        </li>
        @if (session()->has('idcard'))
        @if(Session::get('acctype') <> "เจ้าหน้าที่")
        <li class="nav-item">
          <a class="nav-link {{ Request::is('myinfo') ? 'active' : '' }}" href="myinfo">ข้อมูลของฉัน</a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="#">สมัครเข้าศึกษาต่อ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ยืนยันสิทธิ์เข้าศึกษาต่อ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ชุมนุม</a>
        </li>
        @if(Session::get('acctype') == "เจ้าหน้าที่")
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        @endif
        @endif
      </ul>
      

    </div>
    <div class="d-flex">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

    @if(Session::has('idcard'))
    <li class="nav-item">
        <a class="nav-link" href="#">{{ Session::get('idcard')}} {{ Session::get('name')}} {{ Session::get('surname')}}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="logout">ออกจากระบบ</a>
    </li>
    @else
    <li class="nav-item">
        <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" aria-current="page" href="register">ลงทะเบียน</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="login">เข้าสู่ระบบ</a>
    </li>
    @endif

    </ul>
    </div>
  </div>
  
</nav>