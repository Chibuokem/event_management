<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Event Management system</title>
   
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport"/>
    <link href="assets/images/favicon.ico" rel="shortcut icon"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144x144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-precomposed.png" />
    <!-- JS FILES -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.20.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/modernizr.custom.js"></script>
    <!-- CSS FILES -->
    <link href="<?php echo base_url();?>assets/rs-plugin/css/settings.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/navstylechange.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/cubeportfolio-3.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/style.css" media="screen" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/responsive.css" media="screen" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="page_head">
            <div id="nav-container" class="nav-container" style="height: auto;">
                <nav role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 pull-left">
                                <div class="logo">
                                    <a href="index.html"><img src="<?php echo base_url();?>assets/images/logo.png" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-6 pull-right">
                              <div class="menu dankovteam-menu-wrapper">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"></button>
                              <div class="navbar-collapse collapse">
                                <div class="menu-main-menu-container">
                                  <ul>
                                    <li class="current-menu-item"><a href="<?php echo base_url();?>">Home</a></li>
                                    <li><a href="#about">About Us</a>
                                     
                                    </li>
                                    <li><a href="#serve">Services</a>
                                      
                                    <li><a href="<?php echo base_url();?>register">Create Account</a>
                                     
                                  <li><a href="<?php echo base_url();?>login">Login</a></li>
                                   <li><a href="<?php echo base_url();?>contact">Contact Us</a></li>
                                
                                </ul>
                              </div>
                            </div>
                          </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
      </header>
      <div class="tp-banner-container" style="height:600px;">
        <div class="tp-banner" >
          <ul style="display:none;">
            <li data-transition="random-static" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
              <!-- MAIN IMAGE -->
              <img src="assets/images/slide.jpg"  alt="slide"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption mediumlightwhitecustom lft tp-resizeme" 
                 data-x="292" 
                 data-y="139"  
                data-speed="500" 
                data-start="800" 
                data-easing="Back.easeOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="500" 
                data-endeasing="Power4.easeIn" 

                style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Take A Seat While We Handle Your Event.
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption largeborder randomrotate tp-resizeme" 
                 data-x="418" 
                 data-y="220"  
                data-speed="300" 
                data-start="1000" 
                data-easing="Back.easeOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="300" 
                data-endeasing="Power4.easeIn" 

                style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;"> 
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption largeboldwhitecustom skewfromleft tp-resizeme" 
                 data-x="192" 
                 data-y="264"  
                data-speed="750" 
                data-start="1200" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="750" 

                style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">Event
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption largeboldwhitecustomdot lft tp-resizeme" 
                 data-x="397" 
                 data-y="264"  
                data-speed="500" 
                data-start="2200" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="500" 

                style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">. 
              </div>

              <!-- LAYER NR. 5 -->
              <div class="tp-caption largeboldwhitecustom sfb tp-resizeme" 
                 data-x="415" 
                 data-y="264"  
                data-speed="750" 
                data-start="1800" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="750" 

                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Mngmt
              </div>

              <!-- LAYER NR. 6 -->
              <div class="tp-caption largeboldwhitecustomdot lft tp-resizeme" 
                 data-x="668" 
                 data-y="264"  
                data-speed="500" 
                data-start="2200" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="500" 

                style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;">. 
              </div>

              <!-- LAYER NR. 7 -->
              <div class="tp-caption largeboldwhitecustom skewfromright tp-resizeme" 
                 data-x="688" 
                 data-y="264"  
                data-speed="750" 
                data-start="1500" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="750" 

                style="z-index: 11; max-width: auto; max-height: auto; white-space: nowrap;">System 
              </div>

              <!-- LAYER NR. 8 -->
              <div class="tp-caption lfb tp-resizeme" 
                 data-x="503" 
                 data-y="400"  
                data-speed="500" 
                data-start="2700" 
                data-easing="Back.easeOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="500" 
                data-endeasing="Power4.easeIn" 

                style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a class="largebutton" href="login/web/index.html">Make A Request Now</a> 
              </div>
            </li>
            <!-- SLIDE  -->
            <li data-transition="random-static" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
              <!-- MAIN IMAGE -->
              <img src="assets/images/slide.jpg"  alt="slider2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption largeboldwhitecustom1 lft tp-resizeme" 
                 data-x="151" 
                 data-y="140"  
                data-speed="300" 
                data-start="800" 
                data-easing="Back.easeOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="300" 
                data-endeasing="Power4.easeIn" 

                style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Your - Special Event Deserves Better.
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption mediumlightwhitecustom lft tp-resizeme" 
                 data-x="327" 
                 data-y="280"  
                data-speed="500" 
                data-start="1300" 
                data-easing="Back.easeOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="500" 
                data-endeasing="Power4.easeIn" 

                style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Take A Seat While We Handle Your Event. 
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption largeborder randomrotate tp-resizeme" 
                 data-x="420" 
                 data-y="230"  
                data-speed="300" 
                data-start="1000" 
                data-easing="Back.easeOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="300" 
                data-endeasing="Power4.easeIn" 

                style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"> 
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption lfb tp-resizeme" 
                 data-x="503" 
                 data-y="400"  
                data-speed="500" 
                data-start="2000" 
                data-easing="Back.easeOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                 data-endspeed="500" 
                data-endeasing="Power4.easeIn" 

                style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><a class="largebutton" href="login/web/index.html">Make A Request now</a> 
                        </div>
                      
                    </li>
          </ul>
        </div>
      </div>
      <script type="text/javascript">
        var revapi;
        jQuery(document).ready(function() {
             revapi = jQuery('.tp-banner').revolution({
            delay:9000,
            startwidth:1140,
            startheight:600,
            hideThumbs:200,

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:2,
            
                        
            simplifyAll:"off",

            navigationType:"bullet",
            navigationArrows:"solo",
            navigationStyle:"round",

            touchenabled:"on",
            onHoverStop:"on",
            nextSlideOnWindowFocus:"off",

            swipe_threshold: 0.7,
            swipe_min_touches: 1,
            drag_block_vertical: false,
    
            keyboardNavigation:"off",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,

            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner3",
                        
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",

            autoHeight:"off",
            forceFullWidth:"on",
            
            
            hideTimerBar:"on",
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"on",
            hideArrowsOnMobile:"on",
            hideThumbsUnderResolution:0,

            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0
            });
        }); //ready
      </script>
      <section id="serve">
      <div class="container marg75">
        <div class="row">
         <div class="col-lg-12">
              <div class="promo-block">
                <div class="promo-text">Our Services</div>
                <div class="center-line"></div>
              </div>
              <div class="promo-paragraph"></div>
            </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ms-12">
            <div class="hi-icon-effect">
              <div class="hi-icon fa icon-layers"></div>
              <div class="service-name">Attention To Detail</div>
              <div class="service-text">We believe every event has got a brand/reputation to protect and promote, that is why we uphold our client's brand by paying extra attention to detail.</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ms-12">
            <div class="hi-icon-effect">
              <div class="hi-icon fa icon-heart"></div>
              <div class="service-name">Love Our Clients</div>
              <div class="service-text">We Really Love Our Client That is Why We'll do everything we can to make your event our next best project!</div>
           </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ms-12">
            <div class="hi-icon-effect">
              <div class="hi-icon fa icon-tools-2"></div>
              <div class="service-name">Innovative Concepts</div>
              <div class="service-text">Having handled numerous events from start to finish, We own a reputation for innovative concepts and designs. We are known to create new event-technologies and trends.</div>
           </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ms-12">
            <div class="hi-icon-effect">
              <div class="hi-icon fa icon-globe"></div>
              <div class="service-name">Experienced Staff Base</div>
              <div class="service-text">Our major goal is to create exceptional events, that's why we invest considerably in the human capacity development of our people.</div>
            </div>
          </div>
        </div>
      </div>
      </section>
      <section id="about">
      <div class="container-color marg75">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="promo-block">
                <div class="promo-text">About This Project</div>
                <div class="center-line"></div>
              </div>
              <div class="promo-paragraph">Event Management System is very helpful for planning how to create sucessfully organize a function. In order to organize a event work is important and work alloted to each member managed by this system. The project gives basic functionality required for an event. It allows the customer to select from a list of event types. Then customer enters an event like Marriage, birthdays etc, the system then allows the customer to select the date and time of event, place and the event equipment's. All this data is logged in the database.This data is then sent to the organizer and they may interact with the customer as per his requirements and his contact data stored in the database.Many customer know of event management that mainly handles concerts and weddings. But there are many other occasions that either require or could benefit from event management, including: conventions, business meetings, sports events et. Many companies use this system firms to coordinate their important meetings, conclaves and other events.</div>
            </div>
          </div>
        </div>
        </div>
        </section>
      <div class="prl-1">
        <div class="prlx">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 marg75">
                <div class="stats-primary">
                  <div class="stats-block stats-top">
                    <div class="aio-icon-top">
                      <div class="aio-icon none"><i class="icon-happy"></i></div>
                    </div>
                    <div class="stats-desc">
                      <div class="stats-number number-counter" data-number="841"><span class="number-count">841</span></div>
                      <div class="stats-text">Happy Clients</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 marg75">
                <div class="stats-primary">
                  <div class="stats-block stats-top">
                    <div class="aio-icon-top">
                      <div class="aio-icon none"><i class="icon-tools"></i></div>
                    </div>
                    <div class="stats-desc">
                      <div class="stats-number number-counter" data-number="593"><span class="number-count">593</span></div>
                      <div class="stats-text">Projects Completed</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 marg75">
                <div class="stats-primary">
                  <div class="stats-block stats-top">
                    <div class="aio-icon-top">
                      <div class="aio-icon none"><i class="icon-trophy"></i></div>
                    </div>
                    <div class="stats-desc">
                      <div class="stats-number number-counter" data-number="753"><span class="number-count">753</span></div>
                      <div class="stats-text">Awards Won</div>
                    </div>
                  </div>jjj
                </div>
              </div>
              <div class="col-lg-3 marg75">
                <div class="stats-primary">
                  <div class="stats-block stats-top">
                    <div class="aio-icon-top">
                      <div class="aio-icon none"><i class="icon-envelope"></i></div>
                    </div>
                    <div class="stats-desc">
                      <div class="stats-number number-counter" data-number="802"><span class="number-count">802</span></div>
                      <div class="stats-text">Letters Sent</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      <div class="footer">
        <div class="soc-media">
          <div class="container">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer facebook"><div class="soc-more"><a href="http://facebook.com/" target="_blank"><i class="icon-facebook"></i></a></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer twitter"><div class="soc-more"><a href="http://twitter.com/" target="_blank"><i class="icon-twitter"></i></a></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer googleplus"><div class="soc-more"><a href="http://plus.google.com/" target="_blank"><i class="icon-googleplus"></i></a></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer dribbble"><div class="soc-more"><a href="http://dribbble.com" target="_blank"><i class="icon-dribbble"></i></a></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer linkedin"><div class="soc-more"><a href="http://linkedin.com/" target="_blank"><i class="icon-linkedin"></i></a></div></div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 soc-medeia-footer rss"><div class="soc-more"><a href="#" target="_blank"><i class="icon-rss"></i></a></div></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="widget_text footer-widget">
                <div class="textwidget">
                  <a href="#" style="width: 100%;display: inline-block;padding-bottom: 15px;"><img src="assets/images/logo.png" alt="" ></a>Event Management System is very helpful for planning how to create sucessfully organize a function. In order to organize a event work is important and work alloted to each member managed by this system. The project gives basic functionality required for an event. It allows the customer to select from a list of event types. Then customer enters an event like Marriage, birthdays etc.
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="widget_primary-get-in-touch footer-widget">
                <h4 class="widget-title">Get in Touch</h4>
                <ul class="contact-footer contact-composer">
                  <li><i class="icon-map-pin"></i> <span>Adress: Caritas University </span></li>
                  <li><i class="icon-phone"></i> <span>Phone:  (+234) 567 - 89 - 30</span></li>
                  <li><i class="icon-megaphone"></i> <span>Skype: eventmgtsystem</span></li>
                  <li><i class="icon-envelope"></i> <span>E-mail: support@ems.com</span></li>
                  <li><i class="icon-key"></i> <span>Weekend: from 9 am to 6 pm</span></li>
                </ul>
              </div>            
            </div>
        </div>
          <div class="row">
            <div class="container">
              <div class="footer-bottom">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-left">
                    <div class="copyright">Copyright © 2017 Event management system. Design by Nwaiku Morgan CE/2011/375</div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-right">
                    <div class="foot_menu">
                      <div class="menu-footer-menu-container">
                        
                      </div>            
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
    <script type="text/javascript" src="<?php echo base_url();?>assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/retina.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/sticky.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.inview.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.cubeportfolio.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/portfolio-main.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>
</body>
</html>