<?php get_header(); ?>
<header class="container-fluid">
    <div class="row">
        <div class="col-sm-12 border-3-bottom-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="padding-top padding-bottom">
<!--                        <a href="http://vmwareforyou.co.uk/hybridcloud/" title="Visit VMWare - for you UK">-->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vmware-logo.png" alt="VMWare" class="display-block float-left" style="margin-top: 7px;">
<!--                        </a>-->
                        <span class="h3 padding-left-2 padding-right-2 text-white">|</span><h3 class="display-inline-block text-green gotham-round-light line-height-h3 margin-0">vCloud Air</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <h1 class="text-center text-white">Welcome to the vCloud Anywhere Challenge</h1>
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
                    <div class="background-blue opacity-80 text-white padding">
                        <h4>Set up Enterprise Class Cloud wherever you are</h4>
                        <p>With vCloud Air it’s never been easier to provision new space in the Cloud. Now you can create enterprise-class Cloud in just a few minutes – and just a few clicks. It really is that quick and simple to do, wherever you are. Want proof? Just watch Richard Munro, CTO for vCloud Air, EMEA provision space from the top of Mount Kilimanjaro!</p>

                        <h4>Provision and prove it - Where will you do it?</h4>
                        <p>You can choose anywhere you like... at the airport or the game, in your car or the spa, during a feast or on the piste... Wherever you can do it, take the vCloud Anywhere Challenge.</p>
                    </div>
                </div>
            </div>
            <!-- The form: enter here -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="background-green opacity-70 padding">
                        <div class="text-align-center">
                            <div class="enter-here-header">
                                <h2>Take the challenge and share your dare</h2>
                            </div>
                        </div>
                        <p>Just provision your space – then prove it with a photo or video clip. You can enter via this page or on Twitter. Be sure to mark any tweets with #vCloudAnywhere and we’ll retweet your entry. Also, be sure to follow <a href="https://twitter.com/search?q=%23vCloudAnywhere&src=typd">#vCloudAnywhere</a> or <a href="https://twitter.com/VMware_UK" title="View the official VMWare UK twitter profile page">@vmware_uk</a> to keep up-to-date with the latest news and entries</p>
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
                        <h2 class="text-white margin-0 padding-2">Featured Videos</h2>
                    </div>
                </div>
            </div>
            <!-- The Video -->
            <div class="row">
                <div class="col-sm-12 margin-bottom">
                    <h3 class="margin-top-0">On top of Mount Kilimanjaro</h3>
                    <h5>Richard Munro - <?php echo eemjii_twitter_inline_link('@RikMunro','rikmunro'); ?></h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/KB6sajgtY1Q" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h3>Whilst Skateboarding</h3>
                    <h5>Justin Olivier - <?php echo eemjii_twitter_inline_link('@ju551e','ju551e'); ?></h5>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/BSjsjsWwm2g" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- Sub columns -->
            <div class="row">
                <!-- Twitter Feed -->
                <div class="col-lg-6 margin-bottom">
                    <div class="background-black opacity-80 padding-2">
                        <div class="text-align-center">
                            <span class="text-white h2 line-height-h2 display-inline-block margin-0">
                                <i class="fa fa-twitter"></i>
                            </span>
                            <br>
                            <h3 class="h5 text-white">Latest Tweets</h3>
                        </div>
                    </div>
                    <div class="twitter-feed-widget">
                        <div class="timeline-twitter-feed" id="5e751571e2e3df00d2c4616d428378ca" data-shortcode="{timeline-twitter-feed terms='#vmware'}">
                        <?php
//                        print_r($tweets);
                        foreach ($tweets->statuses as $tweet) : ?>
                                <div class="ttf-tweet">
                                    <div class="ttf-tweet-row">
                                        <span class="ttf-tweet-user-name"><a class="ttf-tweet-screen-name" href="<?php echo $tweet->user->url; ?>" target="_blank" rel="nofollow"><?php echo $tweet->user->name; ?></a></span> <span class="ttf-tweet-full-name">@<?php echo $tweet->user->screen_name ?></span>
                                    </div>
                                    <div class="ttf-tweet-row">
                                        <div class="ttf-tweet-text"><?php echo $tweet->text; ?>
                                        </div>
                                    </div>
                                </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- Register for OnDemand -->
                <div class="col-lg-6">
                    <a href="http://vcloud.vmware.com/uk/service-offering/virtual-private-cloud-ondemand" title="Sign up for VMWare OnDemand" class="background-blue text-align-center padding-top padding-bottom display-block" target="_blank">
                        <h2 class="h5 text-white text-align-center">Find out more and</h2>
                        <div class="enter-here-header-2">
                            <h3>SIGN UP</h3>
                        </div>
                        <p class="text-white margin-0">For your own trial of</p>
                        <h3 class="h2 text-green margin-0">vCloud Air OnDemand</h3>
                        <span class="h1"><i class="text-white margin-0 fa fa-chevron-circle-right"></i></span>
                    </a>
                </div>
            </div>
        </section>
    </div>
       <!-- Share -->
       <div class="row">
           <div class="col-sm-12">
               <h3>Share </h3><?php dynamic_sidebar( 'share-widget' ); ?>
           </div>
       </div>
</div>
</div>
<div class="climbing"></div>
<?php get_footer(); ?>
