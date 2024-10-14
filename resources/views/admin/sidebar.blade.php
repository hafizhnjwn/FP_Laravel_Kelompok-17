<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    {{-- Logo bisa ditambahkan di sini --}}
    {{-- <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a> --}}
  </div>
  <ul class="nav">
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>

    <!-- Doctor List -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('home') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Doctor List</span>
      </a>
    </li>
    
    <!-- Add Doctors -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('add_doctor_view') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Add Doctors</span>
      </a>
    </li>

    <!-- Facility List -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('facility_list') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Facility List</span>
      </a>
    </li>

    <!-- Add Facility -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ url('add_facility_view') }}">
        <span class="menu-icon">
          <i class="mdi mdi-file-document-box"></i>
        </span>
        <span class="menu-title">Add Facility</span>
      </a>
    </li>
  </ul>
</nav>
