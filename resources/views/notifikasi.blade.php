    <div class="navbar-brand-wrapper d-flex justify-content-center" style="background: #ffff !important">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
        <a class="navbar-brand brand-logo" href="index.html"><img src="images/index.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
        </button>
        </div>
    </div> 

 <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="background: #1454fb !important">
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="images/faces/face5.jpg" alt="profile"/>
          <span class="nav-profile-name" style="color: white !important">Nama User</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="typcn typcn-eject text-primary"></i>
            Logout
          </a>
        </div>
      </li>
      <li class="nav-item nav-user-status dropdown">
          {{-- <p class="mb-0">Last login was 23 hours ago.</p> --}}
      </li>
    </ul>
    
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item nav-date dropdown">
        <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;" style="color: white !important">
          <h6 class="date mb-0">{{ date('d-M-Y') }}</h6>
          <i class="typcn typcn-calendar"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="typcn typcn-th-menu"></span>
    </button>
  </div>