<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?=$page_title;?> - <?=$site_name;?></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url().'themes/'.$theme.'/'?>images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
            <?=$this->session->flashdata('notis')?>
              <?=form_open("login",array('class'=>''));?> 
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" value="<?=set_value('username')?>">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                  <?=form_error('username')?>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" name="password" value="<?=set_value('password')?>">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                  <?=form_error('password')?>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class=" mt-0">
                    <label class="form-label">
                      Help Desk:
                    </label>
                  </div>
                  <a href="#" class="text-small forgot-password text-black" onclick="return false;">+607-453 7292/7295</a>
                </div>
                
		      <input type="hidden" name="level" value="staff">
              <?=form_close(); ?>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="https://aduanict.uthm.edu.my/">Online Helpdesk System</a>
              </li>
              <li>
                <a href="https://ptm.uthm.edu.my/">Pusat Teknologi Maklumat</a>
              </li>
            </ul>
            <p class="footer-text text-center"><?=$footer?></p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url().'themes/'.$theme.'/'?>vendors/js/vendor.bundle.base.js"></script>
  <script src="<?=base_url().'themes/'.$theme.'/'?>vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?=base_url().'themes/'.$theme.'/'?>js/off-canvas.js"></script>
  <script src="<?=base_url().'themes/'.$theme.'/'?>js/misc.js"></script>
  <!-- endinject -->
</body>

</html>