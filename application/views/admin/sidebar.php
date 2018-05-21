<div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="<?php echo base_url('assets/images/faces/face1.jpg')?>" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2"><?php echo $this->session->userdata('nama');?></span>
                <span class="text-secondary text-small"><?php echo $this->session->userdata('role');?></span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Admin')?>">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#kandidat" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Master Job Seeker</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="kandidat">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('Admin/kandidataktif')?>">Active Job Seeker</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('Admin/kandidatnonaktif')?>">Non Active Job Seeker</a></li>
              </ul>
            </div>
          </li>
            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#company" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Master Company</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="company">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('Admin/perusahaanaktif')?>">Active Company</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('Admin/perusahaannonaktif')?>">Non Active Company</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#vacancy" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Master Vacancy</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="vacancy">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('Admin/lowonganaktif')?>">Active Vacancy</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('Admin/lowongannonaktif')?>">Non Active Vacancy</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#job" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Master Job Application</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="job">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('Admin/kandidataktif')?>">Active Job App</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Non Active Job App</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-title">Report</span>
              <i class="mdi mdi-chart-bar menu-icon"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->