@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))
@section('page-header', 'Documentation')

@section('content')
    <div class="container mt-xl-50 mt-sm-30 mt-15">
        <!-- Row -->
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Introduction</h5>
                    <p>Pinkman is a Bootstrap 4.1.X & Sass based solid core framework that works well for all screen sizes and modern browsers.  HTML5 validated clean code is focused - keeping it simple and orderly. With Pinkman's UI components library, you can actually get more time on building stuff, rather than editing pixel distances.

                    Pinkman - HTML template and Admin UI kit can be used for any type of web application: CRM, Project Management, Statistics, Analytics or any custom admin dashboard.

                    This documentation will guide you through installing the template and exploring the various components that are bundled with the template.</p>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">File Structure</h5>
                    <pre class="bg-violet-light-5 pt-25">
                    HTML
                      ├──
                      │   └── dist
                      │     └── css
                      │     └── fonts
                      │     └── img
                      │     └── js
                      │   └── src
                      │     └──scss
                      │       └── colors.scss
                      │       └── mixins.scss
                      │       └── navbar.scss
                      │       └── style.scss
                      │   └── vendors
                      │       └── All Required plugins files
                      │   └── All Html Pages
                      │   └── .jshintrc
                      │   └── Gruntfile.js
                      │   └── package.json
                      │   └── package-lock.json
                      └──
                    </pre>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Installation (Install Node.js,Grunt)</h5>
                    <p class="mb-20">Use of these tools are completely optional.</p>
                            <ul class="list-ul mt-20 mb-20 pl-15">
                                <li class="mb-10 txt-dark">Node.js and NPM. You can download Node.js from here <a href="https://nodejs.org." target="_blank">https://nodejs.org.</a> Npm comes bundled with Node.js</li>
                                <li class="mb-10 txt-dark">Next you need to install bower.</li>
                                <li class="txt-dark" >At last install grunt using <code>npm install -g grunt-cli</code> and <code>npm install grunt --save-dev</code></li>
                            </ul>
                            <p>After installing all the required frameworks, components and dependencies, go to the root folder of and run the following commands from the command line:</p>
                            <ul class="list-ul mt-20 mb-20 pl-15">
                                <li class="mb-10 txt-dark">npm install</li>
                                <li class="mb-10 txt-dark">grunt dist</li>
                                <li class="txt-dark" >grunt</li>
                            </ul>
                            <p>If everything was installed correctly, you should see the jQuery version of Pinkman running in <strong>http://localhost:9000/</strong></p>
                            <br/>
                            <p><strong>Above all procedures are optional you can directly use the compiled file which we provided you.</strong></p>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Menu Style</h5>
                    <p class="mb-20">For vertical navigation you have to first add <code>hk-vertical-nav</code> class with <code>hk-wrapper</code>.</p>
                    <p class="mb-20">For Horizontal navigation you have to first add <code>hk-horizontal-nav</code> class with <code>hk-wrapper</code>.</p>
                    <p class="mb-20">For vertical alt navigation you have to first add <code>hk-alt-nav</code> class with <code>hk-wrapper</code>.</p>
                    <p class="mb-20">For this menu style you have to add <code>hk-navbar-alt</code> class with <code>navbar</code></p>
                    <p class="mb-20">For light & dark menu you can add <code>hk-nav-light</code> or <code>hk-nav-dark</code> with <code>hk-nav</code> class.</p>
                    <p class="">For Scrollable Navigation please add <code>scrollable-nav</code> class with <code>hk-wrapper</code>.</p>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Twitter Feed</h5>
                    <p class="mb-20">We implemented live Twitter Feed on Pinkman, for that we used <a href="http://jasonmayes.com/projects/twitterApi/#sthash.4KiphcTH.dpbs" target="_blank">twitterFetcher</a> third party plugin.</p>
                    <h6 class="mb-30">How to Setup</h6>
                    <h6 class="mb-10">HTML Structure</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        &lt;div class="card bg-primary text-center"&gt;
                            &lt;div class="twitter-slider-wrap card-body"&gt;
                                &lt;div class="twitter-icon text-center mb-15"&gt;
                                    &lt;i class="fa fa-twitter"&gt;&lt;/i&gt;
                                &lt;/div&gt;
                                &lt;div id="tweets_fetch" class="owl-carousel owl-theme"&gt;&lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    </pre>
                    <h6 class="mt-30 mb-10">CSS</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        &lt;!-- Lightgallery CSS --&gt;
                        &lt;link href="../HTML/vendors/lightgallery/dist/css/lightgallery.min.css" rel="stylesheet" type="text/css"&gt;
                    </pre>
                    <h6 class="mt-30 mb-10">JS</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        &lt;!-- twitter JavaScript --&gt;
                        &lt;script src="../HTML/dist/js/twitterFetcher.js"&gt;&lt;/script&gt;
                        &lt;script src="../HTML/dist/js/widgets-data.js"&gt;&lt;/script&gt;
                        ​
                        &lt;!-- Owl JavaScript --&gt;
                        &lt;script src="../HTML/vendors/owl.carousel/dist/owl.carousel.min.js"&gt;&lt;/script&gt;
                        ​
                        &lt;!-- Owl Init JavaScript --&gt;
                        &lt;script src="../HTML/dist/js/owl-data.js"&gt;&lt;/script&gt;
                        ​
                    </pre>
                    <h6 class="mt-30 mb-10">Initialize Twitter Feed</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        if( $('#tweets_fetch').length > 0 ){
                                var configList = {
                                  "profile": {"screenName": 'envato'},
                                  "domId": 'tweets_fetch',
                                  "maxTweets": 2,
                                  "enableLinks": true,
                                  "showUser": false,
                                  "showTime": true,
                                  "showImages": false,
                                  "showInteraction":false,
                                  "lang": 'en'
                                };
                                twitterFetcher.fetch(configList);
                            }
                        });
                        ​
                        $(window).on('load', function () {
                            setTimeout(function(){
                                $('#tweets_fetch').owlCarousel({
                                    loop:true,
                                    margin:0,
                                    autoplay:true,
                                    responsiveClass:true,
                                    autoHeight:true,
                                    autoplayTimeout:4000,
                                    responsive:{
                                        0:{
                                            items:1
                                        }
                                    }
                                });
                            },2000);
                        });
                        ​
                    </pre>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Chat</h5>
                    <p class="mb-20">Chat spp is exclusive design for Pinkman users , it provide you rich user experience.There are no external plugin dependencies.</p>
                    <h6 class="mb-30">How to Setup</h6>
                    <h6 class="mb-10">HTML Structure</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        &lt;div class="chatapp-wrap"&gt;
                            &lt;div class="chatapp-left"&gt;
                                &lt;header&gt;
                                     &lt;!--Chat app left header content--&gt;
                                &lt;/header&gt;
                                &lt;form role="search" class="chat-search"&gt;
                                     &lt;!--Chat app search form--&gt;
                                &lt;/form&gt;
                                &lt;div class="chatapp-users-list"&gt;
                                   &lt;!--Chat app user list--&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="chatapp-right"&gt;
                                &lt;header&gt;
                                    &lt;!--Chat app right header content--&gt;
                                &lt;/header&gt;
                                &lt;div class="chat-body"&gt;
                                    &lt;!--Chat body--&gt;
                                &lt;/div&gt;
                                &lt;footer&gt;
                                    &lt;!--Chat Input field--&gt;
                                &lt;/footer&gt;
                            &lt;/div&gt;
                         &lt;/div&gt;
                    </pre>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Calendar</h5>
                    <p class="mb-20">Calendar app is based on Fullcallendar js https://fullcalendar.io/. We have customized it a bit to give more interactive experience.</p>
                    <h6 class="mb-30">How to Setup</h6>
                    <h6 class="mb-10">HTML Structure</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        &lt;div class="calendar-wrap"&gt;
                             &lt;div id="calendar"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                    </pre>
                    <h6 class="mt-30 mb-10">CSS</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        &lt;!-- Calendar CSS --&gt;
                        &lt;link href="../HTML/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" type="text/css" /&gt;
                    </pre>
                    <h6 class="mt-30 mb-10">JS</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        &lt;!-- Fullcalendar JavaScript --&gt;
                        &lt;script src="../HTML/vendors/moment/min/moment.min.js"&gt;&lt;/script&gt;
                        &lt;script src="../HTML/vendors/jquery-ui.min.js"&gt;&lt;/script&gt;
                        &lt;script src="../HTML/vendors/fullcalendar/dist/fullcalendar.min.js"&gt;&lt;/script&gt;
                        &lt;script src="../HTML/dist/js/fullcalendar-data.js"&gt;&lt;/script&gt;
                        ​
                    </pre>
                    <h6 class="mt-30 mb-10">Initialize</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        $('#calendar').fullCalendar({
                            ----
                        });
                    </pre>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Email</h5>
                    <p class="mb-20">Pinkman Email app is a web-based email client designed and developed exclusively for Pinkman framework. It has a responsive design to work flawlessly across many devices. </p>
                    <h6 class="mb-30">How to Setup</h6>
                    <h6 class="mb-10">HTML Structure</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        &lt;div class="emailapp-wrap"&gt;
                        &lt;div class="emailapp-sidebar"&gt;
                            &lt;div class="nicescroll-bar"&gt;
                                &lt;div class="emailapp-nav-wrap"&gt;
                                    &lt;!--Email app sidebar content--&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="email-box"&gt;
                            &lt;div class="emailapp-left"&gt;
                                &lt;header&gt;
                                    &lt;!--Email app left content--&gt;
                                &lt;/header&gt;
                                &lt;form role="search" class="email-search"&gt;
                                    &lt;!--Email app left content--&gt;
                                &lt;/form&gt;
                                &lt;div class="emailapp-emails-list"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="emailapp-right"&gt;
                                &lt;header&gt;
                                    &lt;!--Email app right content--&gt;
                                &lt;/header&gt;
                                &lt;div class="email-body"&gt;
                                    &lt;!--Email app body content--&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;!-- Compose email --&gt;
                        &lt;div class="modal fade" id="exampleModalEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalEmail" aria-hidden="true"&gt;
                            &lt;!--Email app compose email content--&gt;
                        &lt;/div&gt;
                        &lt;!-- /Compose email --&gt;
                    &lt;/div&gt;
                    </pre>
                    <h6 class="mt-30 mb-10">JS</h6>
                    <pre class="bg-violet-light-5 pt-25">
                        &lt;!-- Tinymce JavaScript --&gt;
                        &lt;script src="../HTML/vendors/tinymce/tinymce.min.js"&gt;&lt;/script&gt;
                        ​
                        &lt;!-- Tinymce Wysuhtml5 Init JavaScript --&gt;
                        &lt;script src="../HTML/dist/js/tinymce-data.js"&gt;&lt;/script&gt;
                    </pre>
                </section>
                <section class="hk-sec-wrapper">
                    <h5 class="hk-sec-title">Credits</h5>
                    <ul class="list-ul">
                        <li>Bootstrap framework</li>
                        <li><a href="http://getbootstrap.com/">http://getbootstrap.com/</a></li>
                        <li>Jquery</li>
                        <li><a href="https://jquery.com/">https://jquery.com/</a></li>
                        <li>Material Design Iconic Font</li>
                        <li><a href="http://zavoloklom.github.io/material-design-iconic-font/icons.html">http://zavoloklom.github.io/material-design-iconic-font/icons.html</a></li>
                        <li>Font-Awesome</li>
                        <li><a href="http://fortawesome.github.io/Font-Awesome/">http://fortawesome.github.io/Font-Awesome/</a></li>
                        <li>Themify</li>
                        <li><a href="https://themify.me/themify-icons">https://themify.me/themify-icons</a></li>
                        <li>linea-icon</li>
                        <li><a href="http://linea.io/">http://linea.io/</a></li>
                        <li>Simple line icons</li>
                        <li><a href="simplelineicons.com">simplelineicons.com</a></li>

                        <li>Pe-7 icons</li>
                        <li><a href="http://themes-pixeden.com/font-demos/7-stroke/">http://themes-pixeden.com/font-demos/7-stroke/</a></li>

                        <li>Sweet-Alert</li>
                        <li><a href="http://tristanedwards.me/sweetalert">http://tristanedwards.me/sweetalert</a></li>
                        <li>Nestable</li>
                        <li><a href="http://dbushell.com/">http://dbushell.com/</a></li>
                        <li>Slimscroll</li>
                        <li><a href="http://rocha.la/jQuery-slimScroll">http://rocha.la/jQuery-slimScroll</a></li>
                        <li>Full Calendar</li>
                        <li><a href="http://arshaw.com/fullcalendar/">http://arshaw.com/fullcalendar/</a></li>

                        <li>Bootstrap-timepicker</li>
                        <li><a href="http://jdewit.github.com/bootstrap-timepicker">http://jdewit.github.com/bootstrap-timepicker</a></li>
                        <li>Bootstrap Colorpicker</li>
                        <li><a href="http://www.eyecon.ro/bootstrap-colorpicker">http://www.eyecon.ro/bootstrap-colorpicker</a></li>
                        <li>Multi-select</li>
                        <li><a href="http://loudev.com/">http://loudev.com/</a></li>
                        <li>Select2</li>
                        <li><a href="https://select2.github.io/">https://select2.github.io/</a></li>
                        <li>Wysihtml5</li>
                        <li><a href="https://github.com/xing/wysihtml5">https://github.com/xing/wysihtml5</a></li>
                        <li>Datatables</li>
                        <li><a href="https://www.datatables.net/">https://www.datatables.net/</a></li>
                        <li>Jsgrid</li>
                        <li><a href="http://js-grid.com/">http://js-grid.com/</a></li>
                        <li>Morris</li>
                        <li><a href="http://morrisjs.github.io/morris.js/">http://morrisjs.github.io/morris.js/</a></li>
                        <li>Chartjs</li>
                        <li><a href="http://chartjs.org/">http://chartjs.org/</a></li>
                        <li>Sparkline</li>
                        <li><a href="http://omnipotent.net/jquery.sparkline/">http://omnipotent.net/jquery.sparkline/</a>
                        </li>
                        <li>Google maps</li>
                        <li><a href="https://hpneo.github.io/gmaps/">https://hpneo.github.io/gmaps/</a></li>
                        <li>Vector Maps</li>
                        <li><a href="http://jqvmap.com/">http://jqvmap.com/</a></li>
                        <li>Pexels (images)</li>
                        <li><a href="https://pexels.com/">https://pexels.com/</a></li>
                        <li>Flot-charts</li>
                        <li><a href="http://www.flotcharts.org/">http://www.flotcharts.org/</a></li>
                        <li>Owl carousel</li>
                        <li><a href="http://owlgraphic.com/owlcarousel/"> http://owlgraphic.com/owlcarousel/</a></li>
                        <li>Switchery</li>
                        <li><a href="https://github.com/abpetkov/switchery"> https://github.com/abpetkov/switchery</a></li>
                        <li>Bootstrap select</li>
                        <li><a href="https://github.com/silviomoreto/bootstrap-select"> https://github.com/silviomoreto/bootstrap-select</a></li>
                        <li>Wysiwig Editor</li>
                        <li><a href="http://www.tinymce.com/">http://www.tinymce.com/</a></li>
                        <li>Chartist chart</li>
                        <li><a href="https://gionkunz.github.io/chartist-js/"> https://gionkunz.github.io/chartist-js/</a></li>
                      </ul>
                </section>
            </div>
        </div>
        <!-- /Row -->
    </div>
@endsection
