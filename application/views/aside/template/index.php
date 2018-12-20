<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=$site_name;?> - <?=$site_slogan;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free HTML5 Website Template by uicookies.com" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="uicookies.com" />
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>css/open-iconic-bootstrap.min.css">
    
    <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>css/icomoon.css">
    <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>css/animate.css">
    <link rel="stylesheet" href="<?=base_url().'themes/'.$theme.'/'?>css/style.css">

  </head>
  <body>
    
    <aside class="probootstrap-aside js-probootstrap-aside">
      <a href="#" class="probootstrap-close-menu js-probootstrap-close-menu d-md-none"><span class="oi oi-arrow-left"></span> Close</a>
      <div class="probootstrap-site-logo probootstrap-animate" data-animate-effect="fadeInLeft">
        
        <a href="index.html" class="mb-2 d-block probootstrap-logo">Aside</a>
        <p class="mb-0">Another free html5 bootstrap 4 template by <a href="https://uicookies.com/" target="_blank">uiCookies</a></p>
      </div>
      <div class="probootstrap-overflow">
        <nav class="probootstrap-nav">
          <ul>
            <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="index.html">Home</a></li>
            <li class="probootstrap-animate active" data-animate-effect="fadeInLeft"><a href="about.html">About</a></li>
            <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="services.html">Services</a></li>
            <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="portfolio.html">Portfolio</a></li>
            <li class="probootstrap-animate" data-animate-effect="fadeInLeft"><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
        <footer class="probootstrap-aside-footer probootstrap-animate" data-animate-effect="fadeInLeft">
          <ul class="list-unstyled d-flex probootstrap-aside-social">
            <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
            <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
            <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
          </ul>
          <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved.</p>
        </footer>
      </div>
    </aside>


    <main role="main" class="probootstrap-main js-probootstrap-main">
      <div class="probootstrap-bar">
        <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
        <div class="probootstrap-main-site-logo"><a href="index.html">Aside</a></a></div>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-12">
            <?php $this->load->view($content); ?>
          </div>
        </div>
        <!-- END row -->

      </div>

      <div class="container-fluid d-md-none">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-unstyled d-flex probootstrap-aside-social">
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
            </ul>
            <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved. Designed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a></p>
          </div>
        </div>
      </div>

    </main>

    

    <script src="<?=base_url().'themes/'.$theme.'/'?>js/jquery-3.2.1.slim.min.js"></script>
    <script src="<?=base_url().'themes/'.$theme.'/'?>js/popper.min.js"></script>
    <script src="<?=base_url().'themes/'.$theme.'/'?>js/bootstrap.min.js"></script>
    <script src="<?=base_url().'themes/'.$theme.'/'?>js/owl.carousel.min.js"></script>
    <script src="<?=base_url().'themes/'.$theme.'/'?>js/jquery.waypoints.min.js"></script>
    <script src="<?=base_url().'themes/'.$theme.'/'?>js/imagesloaded.pkgd.min.js"></script>

    <script src="<?=base_url().'themes/'.$theme.'/'?>js/main.js"></script>
    
    
  </body>
</html>