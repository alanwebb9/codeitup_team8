<?php
  $image = base_url() . "assets/images/";
  //echo $image;exit;

  $base_url = base_url() ."index.php";
?>

<style type="text/css">
  /*
  *
  * ==========================================
  * CUSTOM UTIL CLASSES
  * ==========================================
  *
  */

  .video-background-holder {
    position: relative;
    background-color: black;
    height: calc(100vh - 0px);
    min-height: 25rem;
    width: 100%;
    overflow: hidden;
  }

  .video-background-holder video {
    opacity: 0.4;
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: 0;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
  }

  .video-background-content {
    position: relative;
    z-index: 2;
  }

  .video-background-overlay {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    opacity: 0.5;
    z-index: 1;
  }

  /*
  *
  * ==========================================
  * FOR DEMO PURPOSES
  * ==========================================
  *
  */

  code {
    padding: 0 0.15rem;
    background: #f5f5f5;
    border-radius: 0.2rem;
  }

 .table {
  border-spacing: 0 0.85rem !important;
}

.table .dropdown {
  display: inline-block;
}

.table td,
.table th {
  vertical-align: middle;
  margin-bottom: 10px;
  border: none;
}

.table thead tr,
.table thead th {
  border: none;
  font-size: 12px;
  letter-spacing: 1px;
  text-transform: uppercase;
  background: transparent;
}

.table td {
  background: #f0f0f0;
}

.table td:first-child {
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}

.table td:last-child {
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

.avatar {
  width: 2.75rem;
  height: 2.75rem;
  line-height: 3rem;
  border-radius: 50%;
  display: inline-block;
  background: transparent;
  position: relative;
  text-align: center;
  color: #868e96;
  font-weight: 700;
  vertical-align: bottom;
  font-size: 1rem;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.avatar-sm {
  width: 2.5rem;
  height: 2.5rem;
  font-size: 0.83333rem;
  line-height: 1.5;
}

.avatar-img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
}

.avatar-blue {
  background-color: #c8d9f1;
  color: #467fcf;
}

table.dataTable.dtr-inline.collapsed
  > tbody
  > tr[role="row"]
  > td:first-child:before,
table.dataTable.dtr-inline.collapsed
  > tbody
  > tr[role="row"]
  > th:first-child:before {
  top: 24px;
  left: 14px;
  /*border: none;
  box-shadow: none;*/
}

table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child,
table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {
  padding-left: 48px;
}

table.dataTable > tbody > tr.child ul.dtr-details {
  width: 100%;
}

table.dataTable > tbody > tr.child span.dtr-title {
  min-width: 50%;
}

table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
  padding: 0.75rem 1rem 0.125rem;
}

div.dataTables_wrapper div.dataTables_length label,
div.dataTables_wrapper div.dataTables_filter label {
  margin-bottom: 0;
}

@media (max-width: 767px) {
  div.dataTables_wrapper div.dataTables_paginate ul.pagination {
    -ms-flex-pack: center !important;
    justify-content: center !important;
    margin-top: 1rem;
  }
}

.btn-icon {
  background: #e3e3e3;
}
.btn-icon .bx {
  font-size: 20px;
}

.btn .bx {
  vertical-align: middle;
  font-size: 20px;
}

.dropdown-menu {
  padding: 0.25rem 0;
}

.dropdown-item {
  padding: 0.5rem 1rem;
}

.badge {
  padding: 0.5em 0.75em;
}

.badge-success-alt {
  background-color: #d7f2c2;
  color: #7bd235;
}

.table a {
  color: #212529;
}

.table a:hover,
.table a:focus {
  text-decoration: none;
}

table.dataTable {
  margin-top: 12px !important;
}

.icon > .bx {
  display: block;
  min-width: 1.5em;
  min-height: 1.5em;
  text-align: center;
  font-size: 1.0625rem;
}

.btn {
  font-size: 0.9375rem;
  font-weight: 500;
  padding: 0.5rem 0.75rem;
}

.avatar-blue {
      background-color: #c8d9f1;
      color: #467fcf;
    }

    .avatar-pink {
      background-color: #fcd3e1;
      color: #f66d9b;
    }
</style>


<!-- Background video -->
<div class="video-background-holder">
  <div class="video-background-overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="http://54.93.224.148/JNJ/overlay.mp4">
    </video>
  <div class="video-background-content container h-100">
    <!-- <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-4">Bootstrap video background</h1>
        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
        <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-white">
                    <u>Bootstrapious</u></a>
        </p>
      </div>
    </div> -->

    <div class="container mt-3 ">
        <div class="row text-white">
            <div class="welcome col-md-6">
              <div class="welcome-message mb-5 mt-5">
                  <h1 class="text-uppercase">Welcome to J&amp;J 2020 Hackathon</h1>
              </div>
              <div class="welcome-description">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <div class="action mt-5">
                <div class="action-primary-btn mt-3">
                    <a href="http://localhost/JNJ2020/map.html" class="btn btn-primary btn-lg">Analytics</a>
                </div>
                <div class="action-secondary-btn mt-3">
                    <p class="d-none">Get more insight into the dataset</p>
                    <a href="http://localhost/JNJ2020/charts.html" class="btn btn-secondary btn-sm">Graphs</a>
                </div>
              </div>
          </div>

          <div class="hero-image col-md-6">
              <!-- <img class="img-fluid" src="<?php echo $image.'hero_image.jpg'; ?>"> -->
          </div>
        </div>

    </div>
  </div>
</div>


<!-- For demo purpose -->
<!-- <section class="" style="height:400px;">
  <div class="container-fluid py-5">
    <div class="row">
      <div class="col-lg-8 mx-auto card card-body">
        <a name="narrative"></a>
        <h2>Geo Stats</h2>
        <iframe width="100%" height="700px;" src="http://localhost/JNJ2020/map.html">
      </div>
    </div>
  </div>
</section> -->
<!-- End -->

<!-- For demo purpose -->
<!-- <section class="" style="height:700px;">
  <div class="container-fluid py-5">
    <div class="row">
      <div class="col-lg-8 mx-auto card card-body">
        <a name="narrative"></a>
        <h2>Graphs</h2>
        <iframe width="100%" height="700px;" src="http://localhost/JNJ2020/charts.html">
      </div>
    </div>
  </div>
</section> -->
<!-- End -->


<!-- For demo purpose -->
<section class="py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 mx-auto card card-body">
        <a name="explore"></a>
        <h2>Explore More</h2>
        <table id="exploremore" class="table table-hover responsive nowrap"  style="width:100%">
          <thead>
            <tr>
              <th>Ethnicity</th>
              <th>Gender</th>
              <th>FSM</th>
              <th>SEN</th>
              <th>Type of School</th>
              <th>Religious Character</th>
              <th>Value</th>
              <th>Denominator</th>
              <!-- <th>Option</th> -->
            </tr>
          </thead>
          <tbody>
            <?php $counter = 0; foreach ($gcse_results as $key => $result) { ?>
              <tr>
                <td><?php echo $result->ethnicity; ?></td>
                <td><?php echo $result->gender; ?></td>
                <td><?php echo $result->fsm; ?></td>
                <td><?php echo $result->sen; ?></td>
                <td><?php echo $result->type_of_school; ?></td>
                <td><?php echo $result->religious_character; ?></td>
                <td><?php echo $result->value; ?></td>
                <td><?php echo $result->denominator; ?></td>
               <!--  <td><button class="btn btn-primary" data-toggle="modal" data-target="#hello<?php echo $counter; ?>"><?php echo $counter; ?></button></td> -->
               <!--  <td>
                  <div class="dropdown">
                    <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
                            title="Actions"></i>
                        </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit Profile</a>
                      <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i> Remove</a>
                    </div>
                  </div>
                </td> -->
              </tr>
            <?php $counter++; } ?>
          </tbody>
        </table>

        <div class="card card-body mt-3">
            Chart
        </div>
      </div>
    </div>

    <footer class="footer text-center mt-5">
            <hr style="height: 1px; background-color: white;">
            <p>This project is created by team Phosphor <?php echo date('Y'); ?></p>
      </footer>
  </div>
</section>
<!-- End -->



<!-- graphs pop ups -->

<?php $counter = 0; foreach ($gcse_results as $key => $result) { ?>
  <!-- Modal -->
  <!-- <div class="modal fade" id="hello<?php echo $counter; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Charts</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Hello <?php echo $counter; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->
<?php $counter++; } ?>
