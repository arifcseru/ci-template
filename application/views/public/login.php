<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/img/kit/free/apple-icon.png">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/kit/free/favicon.png">
    <title>
        Login &#45; Material Kit PRO by Creative Tim
    </title>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html kit, html css template, web template, bootstrap, css3 template, frontend, responsive bootstrap template, bootstrap 4 ui kit, premium bootstrap kit, responsive ui kit">
    <meta name="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Kit PRO by Creative Tim">
    <meta itemprop="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Kit PRO by Creative Tim">
    <meta name="twitter:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
    <meta name="twitter:data1" content="Material Kit PRO by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="$79">
    <meta name="twitter:label2" content="Price">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Kit PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/material-kit-pro/presentation.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg" />
    <meta property="og:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-kit.min.css?v=2.0.2">
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-kit.css">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url(); ?>assets/assets-for-demo/demo.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/assets-for-demo/vertical-nav.css" rel="stylesheet" />
    <!-- iframe removal -->
    <script type="text/javascript">
        if (document.readyState === 'complete') {
            if (window.location != window.parent.location) {
                const elements = document.getElementsByClassName("iframe-extern");
                while (elemnts.lenght > 0) elements[0].remove();
                // $(".iframe-extern").remove();
            }
        };
    </script>
</head>

<body class="login-page ">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Home </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            
        </div>
    </nav>
    <div class="page-header header-filter" style="background-image: url(&apos;<?php echo base_url(); ?>assets/img/kit/pro/bg7.jpg&apos;); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <div class="card card-signup">
                        <form class="form" action="<?php echo base_url(); ?>loginMe" method="post">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Log in</h4>
                                <!-- div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div-->
                            </div>
                            <p class="description text-center">Login to admin panel</p>
                            <div class="card-body">
                                <!-- div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">face</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="First Name...">
                                </div-->
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">mail</i>
                                        </span>
                                    </div>
                                    <input type="email" name="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password...">
                                </div>
                                <!-- If you want to add a checkbox to this form, uncomment this code

								<div class="checkbox">
									<label>
										<input type="checkbox" name="optionsCheckboxes" checked>
										Subscribe to newsletter
									</label>
								</div> -->
                            </div>
                            <div class="card-footer text-center">
                                <input type="submit" class="btn btn-primary btn-link btn-wd btn-lg" value="Login"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="#creative">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="#creative">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#creative">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="#creative">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &#xA9;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="fa fa-heart heart"></i> by
                    <a href="https://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-material-design.min.js"></script>
    <!--  Google Maps Plugin  -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script> -->
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/nouislider.min.js"></script>
    <!--	Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--	Plugin for Tags, full documentation here: https://xoxco.com/projects/code/tagsinput/  -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!--	Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--	Plugin for Small Gallery in Product Page -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/jquery.flexisel.js"></script>
    <!-- Plugins for presentation and navigation  -->
    <script src="<?php echo base_url(); ?>assets/assets-for-demo/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>assets/assets-for-demo/js/vertical-nav.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="<?php echo base_url(); ?>assets/js/material-kit.min.js?v=2.0.2"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="<?php echo base_url(); ?>assets/assets-for-demo/js/material-kit-demo.js"></script>

    <script>

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-46172202-12']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

        // Facebook Pixel Code Don't Delete
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');

        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        } catch (err) {
            console.log('Facebook Track Error:', err);
        }
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
    </noscript>
  <!--script src="<?php echo base_url(); ?>assets/js/material-kit.js"></script-->
</body>

</html>
