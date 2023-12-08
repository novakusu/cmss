<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $judul_halaman; ?></title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?= base_url('assets/')?>vendors/feather/feather.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>vendors/ti-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>vendors/typicons/typicons.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>vendors/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?= base_url('assets/')?>vendors/datatables.net-bs4/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>js/select.dataTables.min.css">
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/vertical-layout-light/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= base_url('assets/')?>images/favicon.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.tiny.cloud/1/y2dw3ym7myodc0uechqiw8z1wt205ya1nrq0f82t57n60msf/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>
</head>

<body>
<div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start bg-light">
				<div class="me-3">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
						<span class="icon-menu"></span>
					</button>
				</div>
				<div>
					<a class="navbar-brand brand-logo" href="<?= base_url()?>">
						<img src="<?= base_url('assets/')?>images/logo.svg" alt="logo" />
					</a>
					<a class="navbar-brand brand-logo-mini" href="<?= base_url('assets/')?>index.html">
						<img src="<?= base_url('assets/')?>images/logo-mini.svg" alt="logo" />
					</a>
				</div>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-top bg-light">
				<ul class="navbar-nav">
				</ul>
				<ul class="navbar-nav ms-auto ">
        <p class="mb-1  font-weight-semibold"><?= $judul_halaman; ?></p>
					<li class="nav-item dropdown d-none d-lg-block user-dropdown">
            
						<a class="nav-link" id="UserDropdown" href="<?= base_url('assets/')?>#" data-bs-toggle="dropdown"
							aria-expanded="false">
							<img class="img-xs rounded-circle" src="<?= base_url('assets/')?>images/faces/face8.jpg"
								alt="Profile image"> </a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
							<div class="dropdown-header text-center">
								<img class="img-md rounded-circle" src="<?= base_url('assets/')?>images/faces/face8.jpg"
									alt="Profile image">
								<p class="mb-1 mt-3 font-weight-semibold"><?=$this->session->userdata('nama') ?></p>
								<p class="fw-light text-muted mb-0"><?=$this->session->userdata('level') ?></p>
							</div>
							<a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>
								Password</a>
							<a class="dropdown-item" href="<?= base_url('auth/logout')?>"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Log Out</a>
						</div>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
					data-bs-toggle="offcanvas">
					<span class="mdi mdi-menu"></span>
				</button>
			</div>
		</nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper ps ps--active-y" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    <i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    <i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    <i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked="">
                      Schedule meeting for next week
                    <i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked="">
                      Project review
                    <i class="input-helper"></i></label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 fw-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component Fbra build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 732px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 690px;"></div></div></div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 fw-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
		<ul class="nav">
			<li class="nav-item">
				<a href="<?= base_url('admin/home')?>"class="nav-link">
					<i class=" menu-icon mdi mdi-home"></i>
					<span class="menu-title">Dashboard</span>
				</a>
			</li>
			<li class="nav-item">
            <a href="<?= base_url('admin/caraousel')?>"class="nav-link">
					<i class=" menu-icon mdi mdi-crown"></i>
					<span class="menu-title">caraousel</span>
				</a>
			</li>
			<li class="nav-item">
            <a href="<?= base_url('admin/kategori')?>"class="nav-link">
					<i class=" menu-icon mdi mdi-table-large"></i>
					<span class="menu-title">kategori konten</span>
				</a>
			</li>
			<li class="nav-item">
            <a href="<?= base_url('admin/konten')?>"class="nav-link">
					<i class=" menu-icon mdi mdi-book-open-variant"></i>
					<span class="menu-title">konten</span>
				</a>
			</li>
      <?php if($this->session->userdata('level')=='Admin'){?>
			<li class="nav-item">
            <a href="<?= base_url('admin/user')?>"class="nav-link">
					<i class="menu-icon mdi mdi-account-circle-outline"></i>
					<span class="menu-title">user</span>
				</a>
			</li>
      <?php } ?>
      <?php if($this->session->userdata('level')=='Admin'){?>
			<li class="nav-item">
            <a href="<?= base_url('admin/konfigurasi')?>"class="nav-link">
					<i class=" menu-icon mdi mdi-transcribe"></i>
					<span class="menu-title">konfigurasi</span>
				</a>
			</li>
      <?php } ?>
		</ul>
	</nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <?= $contents; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
	<script src="<?= base_url('assets/')?>vendors/js/vendor.bundle.base.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?= base_url('assets/')?>vendors/chart.js/Chart.min.js"></script>
	<script src="<?= base_url('assets/')?>vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="<?= base_url('assets/')?>vendors/progressbar.js/progressbar.min.js"></script>

	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?= base_url('assets/')?>js/off-canvas.js"></script>
	<script src="<?= base_url('assets/')?>js/hoverable-collapse.js"></script>
	<script src="<?= base_url('assets/')?>js/template.js"></script>
	<script src="<?= base_url('assets/')?>js/settings.js"></script>
	<script src="<?= base_url('assets/')?>js/todolist.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="<?= base_url('assets/')?>js/dashboard.js"></script>
	<script src="<?= base_url('assets/')?>js/Chart.roundedBarCharts.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- End custom js for this page-->
  <footer class="footer">
		<div class="d-sm-flex justify-content-center justify-content-sm-between">
			<span class="text-muted text-center text-sm-left d-block d-sm-inline-block"><a
					href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a>
				from BootstrapDash.</span>
			<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights
				reserved.</span>
        <script>
          $('#ngilang').delay('slow').slideDown('slow').delay(10000).slideUp(600);
        </script>  
		</div>
	</footer>
  <script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
	});
</script>
</body>

</html>







