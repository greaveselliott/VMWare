<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo bloginfo('name'); ?></title>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body class="background-black">
<header class="container-fluid">
    <div class="row">
        <div class="col-sm-12 border-3-bottom-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="padding-top padding-bottom">
                        <a href="http://www.vmware.com/uk" title="Visit the official VMWare UK website.">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vmware-logo.png" alt="VMWare" class="display-block float-left" style="margin-top: 7px;"></a><span class="h3 padding-left-2 padding-right-2 text-white">|</span><h3 class="display-inline-block text-green gotham-round-light line-height-h3 margin-0">Find out more about vCloud® Air™</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <h1 class="text-center text-white">vCloud Dare</h1>
    </div>
</div>
<div class="container background-cloud">
   <div class="padding">
    <div class="row">
        <!-- Take the challenge -->
        <section class="col-sm-6">
            <!-- The title -->
            <div class="row margin-bottom margin-top">
                <div class="col-sm-12">
                    <div class="background-white opacity-60 border-1-bottom-blue">
                        <h2 class="text-blue margin-0 padding-2">Take the challenge</h2>
                    </div>
                </div>
            </div>
            <!-- The paragraph -->
            <div class="row margin-bottom">
                <div class="col-sm-12">
                    <div class="background-black opacity-80">
                    <p class="text-white padding margin-0">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                    </div>
                </div>
            </div>
            <!-- The form: enter here -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="background-green opacity-70 padding">
                        <div class="text-align-center">
                            <div class="enter-here-header">
                                <h2>ENTER HERE</h2>
                            </div>
                        </div>
                        <?php gravity_form( 1, $display_title = true, $display_description = true, $display_inactive = false, $field_values = null, $ajax = true ); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dare of the week -->
        <section class="col-sm-6">
            <!-- The title -->
            <div class="row">
                <div class="col-sm-12 margin-bottom margin-top">
                    <div class="background-green opacity-85 border-1-bottom-blue">
                        <h2 class="text-white margin-0 padding-2">Dare of the week</h2>
                    </div>
                </div>
            </div>
            <!-- The Video -->
            <div class="row">
                <div class="col-sm-12 margin-bottom">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/ScMzIvxBSi4" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- Sub columns -->
            <div class="row">
                <!-- Twitter Feed -->
                <div class="col-lg-6 margin-bottom">
                    <div class="background-black opacity-80 padding-2">
                        <div class="text-align-center">
                            <span class="text-blue h2 line-height-h2 display-inline-block margin-0">
                                <i class="fa fa-twitter"></i>
                            </span>
                        </div>
                    </div>
<!--                        <hr class="border-3-blue width-100 margin-top-0 padding-top-0">-->
                        <?php dynamic_sidebar( 'twitter-stream' ); ?>

                </div>
                <!-- Register for OnDemand -->
                <div class="col-lg-6">
                    <a href="http://vcloud.vmware.com/uk/service-offering/virtual-private-cloud-ondemand" title="Sign up for VMWare OnDemand" class="background-blue text-align-center padding-top padding-bottom display-block">
                        <h2 class="h5 text-white text-align-center">HAVEN'T SIGNED UP YET?</h2>
                        <div class="enter-here-header-2">
                            <h3>ENTER HERE</h3>
                        </div>
                        <p class="text-white margin-0">FOR</p>
                        <h3 class="h2 text-green margin-0">OnDemand</h3>
                        <span class="h1"><i class="text-white margin-0 fa fa-chevron-circle-right"></i></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Share -->
        <div class="row">
            <div class="col-sm-12">

                <h3 class="text-white display-inline-block">Share</h3>
                <a href="https://twitter.com/vcloud" title="Follow VMWare on Twitter" class="display-inline-block h2"><i class="fa fa-twitter-square"></i></a>
                <a href="https://www.linkedin.com/grp/home?gid=5046918" title="Follow the official VMWare Facebook page" class="display-inline-block h2"><i class="fa fa-facebook-square"></i></a>
                <a href="https://www.facebook.com/vmwarevcloud" title="Stay up date with VMWare on Linked-in" class="display-inline-block h2"><i class="fa fa-linkedin-square"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="climbing"></div>
<?php wp_footer(); ?>
</body>
</html>