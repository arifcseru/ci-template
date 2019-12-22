<html lang="en">
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--?php echo $pageTitle; ?-->
  <title>
    <?php echo $this->lang->line('header_title_label'); ?>
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, free dashboard, free admin dashboard, free bootstrap 4 admin dashboard">
  <meta name="description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Dashboard by Creative Tim">
  <meta itemprop="description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard by Creative Tim">
  <meta name="twitter:description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://demos.creative-tim.com/material-dashboard/examples/dashboard.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" /> -->

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" /> -->

  <!-- CSS Files -->
  <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->
  <script src="<?php echo base_url(); ?>js/common_actions.js" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.js" type="text/javascript"></script>

  <link href="<?php echo base_url(); ?>assets/css/material-dashboard.min.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet" />
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" type="text/css" /> -->
  <!-- Google Tag Manager -->
  <script>
    var baseHref = "<?php echo base_url(); ?>";
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
</head>

<body data-color="azure" class="<?php echo $bodyClass; ?>" id="viewContainer">
  <div class="wrapper">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="<?php echo base_url(); ?>assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="<?php echo base_url(); ?>" class="simple-text logo-normal">
          <?php echo "Welcome ".$createdByUserName; ?>
        </a>
      </div>
      <!-- 
      <i class="material-icons">dashboard</i>
      <i class="material-icons">person</i>
      <i class="material-icons">content_paste</i>
      <i class="material-icons">library_books</i>
      <i class="material-icons">bubble_chart</i>
      <i class="material-icons">location_ons</i>
      <i class="material-icons">notifications</i>
      <i class="material-icons">language</i>
      <i class="material-icons">unarchive</i>
      
      <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Pricing </span>
      
       -->
      <div class="sidebar-wrapper">
        <ul class="nav">
        
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>dashboard">
              <i class="material-icons">dashboard</i>
              <p><?php echo $this->lang->line('menu_dashboard_label'); ?></p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>user">
              <i class="material-icons">person</i>
              <p><?php echo $this->lang->line('menu_userProfile_label'); ?></p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#recruitment" aria-expanded="false">
              <i class="material-icons">image</i>
              <p> <?php echo $this->lang->line('menu_recruitment_label'); ?>
                <b class="caret"></b>
              </p>
            </a>
            
            <div class="collapse" id="recruitment" style="">
              <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>jobPosting">
                      <i class="material-icons">content_paste</i>
                      <p><?php echo $this->lang->line('menu_jobPosting_label'); ?></p>
                    </a>
                  </li>
                  
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>applicantInfo">
                      <i class="material-icons">content_paste</i>
                      <p><?php echo $this->lang->line('menu_applicantInfo_label'); ?></p>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>interviewInfo">
                      <i class="material-icons">content_paste</i>
                      <p><?php echo $this->lang->line('menu_interviewInfo_label'); ?></p>
                    </a>
                  </li>
                  
                  <!--li class="nav-item <?php $printActive = $pageName == 'recruitment'? "active" : "" ; echo $printActive; ?> ">
                    <a class="nav-link" href="<?php echo base_url(); ?>recruitment">
                      <i class="material-icons">content_paste</i>
                      <p>Recruitment</p>
                    </a>
                  </li-->
                
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>employee">
              <i class="material-icons">content_paste</i>
              <p><?php echo $this->lang->line('menu_employee_label'); ?></p>
            </a>
          </li>

          
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#hrms" aria-expanded="false">
              <i class="material-icons">image</i>
              <p> <?php echo $this->lang->line('menu_hrms_label'); ?>
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="hrms" style="">
              <ul class="nav">
              
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>employeePosition">
                      <i class="material-icons">content_paste</i>
                      <p><?php echo $this->lang->line('menu_employeePosition_label'); ?></p>
                    </a>
                  </li>
                  
                <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>holiday">
              <i class="material-icons">content_paste</i>
              <p><?php echo $this->lang->line('menu_holiday_label'); ?></p>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>attendanceInfo">
              <i class="material-icons">content_paste</i>
              <p><?php echo $this->lang->line('menu_attendanceInfo_label'); ?></p>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>leaveRequest">
              <i class="material-icons">content_paste</i>
              <p><?php echo $this->lang->line('menu_leaveRequest_label'); ?></p>
            </a>
          </li>
                
              </ul>
            </div>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#employeeFacility" aria-expanded="false">
              <i class="material-icons">image</i>
              <p> <?php echo $this->lang->line('menu_employeeFacility_label'); ?>
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="employeeFacility" style="">
              <ul class="nav">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>employeeSalary">
                      <i class="material-icons">content_paste</i>
                      <p><?php echo $this->lang->line('menu_employeeSalary_label'); ?></p>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>providendFund">
                      <i class="material-icons">content_paste</i>
                      <p><?php echo $this->lang->line('menu_providendFund_label'); ?></p>
                    </a>
                  </li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link collapsed" data-toggle="collapse" href="#publicity" aria-expanded="false">
              <i class="material-icons">image</i>
              <p> <?php echo $this->lang->line('menu_publicity_label'); ?>
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="publicity" style="">
              <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>notifications">
                      <i class="material-icons">content_paste</i>
                      <p><?php echo $this->lang->line('menu_notifications_label'); ?></p>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>latestNews">
                      <i class="material-icons">content_paste</i>
                      <p><?php echo $this->lang->line('menu_latestNews_label'); ?></p>
                    </a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>buzzFeed">
                      <i class="material-icons">content_paste</i>
                      <p><?php echo $this->lang->line('menu_buzzFeed_label'); ?></p>
                    </a>
                 </li>
                 
              </ul>
            </div>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>employeeSeparation">
              <i class="material-icons">content_paste</i>
              <p><?php echo $this->lang->line('menu_employeeSeparation_label'); ?></p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>