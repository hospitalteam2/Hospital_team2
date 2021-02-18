<!--Main Footer-->
<footer class="main-footer" style="background:#0040ff;">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--big column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget logo-widget">
                                <div class="logo">
                                    <a href="index.html"><img src="images/footer-logo.png" alt=""/></a>
                                </div>
                                <div class="text"
                                     style="color: white">{{trans('footer.Meditech is a library of health and medical')}}
                                    <br>
                                    {{trans('footer.templates with predefined web elements which helps you to build your medical templates best site
     Provide Comprehensive Quality Care About Medical Care Health Suspendisse metus turpis.')}}</div>
                                <ul class="social-icons">
                                    @foreach($settings as $setting)
                                        @if( $loop->index == 0)
                                            <li><a href="{{ $setting->facebook }}"><span
                                                        class="fab fa-facebook-f"></span></a></li>
                                            <li><a href="{{ $setting->google }}"><span class="fab fa-google"></span></a>
                                            </li>
                                            <li><a href="{{ $setting->twitter }}"><span
                                                        class="fab fa-twitter"></span></a></li>
                                            <li><a href="{{ $setting->skype}}"><span class="fab fa-skype"></span></a>
                                            </li>
                                            <li><a href="{{ $setting->linked }}"><span
                                                        class="fab fa-linkedin"></span></a></li>

                                </ul>
                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <div class="footer-title  clearfix">
                                    <h2 style="color: white">{{trans('footer.Departments')}}</h2>
                                    <div class="separator"></div>
                                </div>
                                <ul class="footer-list">
                                    <li><a href="#" style="color: white">{{trans('footer.Surgery & Radiology')}}</a>
                                    </li>
                                    <li><a href="#" style="color: white">{{trans('footer.Family Medicine')}}</a></li>
                                    <li><a href="#" style="color: white">{{trans('footer.Women’s Health')}}</a></li>
                                    <li><a href="#" style="color: white">{{trans('footer.Optician')}}</a></li>
                                    <li><a href="#" style="color: white">{{trans('footer.Pediatrics')}}</a></li>
                                    <li><a href="#" style="color: white">{{trans('footer.Dermatology')}}</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--big column-->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <div class="footer-title  clearfix">
                                    <h2 style="color: white">{{trans('footer.News Update')}}</h2>
                                    <div class="separator"></div>
                                </div>

                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="image">
                                            <img src="images/resource/news-image-1.jpg" alt=""/>
                                        </div>
                                        <h3><a style="color: white"
                                               href="blog-detail.html">{{trans('footer.Integrative Medicine And Cancer Treatment')}}</a>
                                        </h3>
                                        <div style="color: white" class="post-date">July 11, 2017</div>
                                    </div>
                                </div>

                                <!--News Widget Block-->
                                <div class="news-widget-block">
                                    <div class="widget-inner">
                                        <div class="image">
                                            <img src="images/resource/news-image-2.jpg" alt=""/>
                                        </div>
                                        <h3><a style="color: white"
                                               href="blog-detail.html">{{trans('footer.Achieving Better Health Care One Patient  Time')}}</a>
                                        </h3>
                                        <div style="color: white" class="post-date">July 11, 2018</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--Footer Column-->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget contact-widget">
                                <div class="footer-title  clearfix">
                                    <h2 style="color: white">{{trans('footer.Contact Us')}}</h2>
                                    <div class="separator"></div>
                                </div>

                                <ul class="contact-list">
                                    <li style="color: white"><span
                                            class="icon flaticon-placeholder"></span>{{ $setting->address}}
                                        <br> CA 94117-1080 USA
                                    </li>
                                    <li style="color: white"><span
                                            class="icon flaticon-call"></span>{{trans('footer.Mon to Fri : 08:30 - 18:00')}}
                                        <br> <a style="color: white"
                                                href="tel:{{ $setting->phone}}">{{ $setting->phone}}</a></li>
                                    <li style="color: white"><span
                                            class="icon flaticon-message"></span>{{trans('footer.Do you have a Question?')}}
                                        <a style="color: white" href="{{ $setting->email}}">{{ $setting->email}}</a>
                                    </li>
                                </ul>
                                @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">MediTech Helth Care &copy; All Rights Reserved By Expertthemes</div>
        </div>
    </div>

</footer>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here"
                               required>
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>

        </div>

    </div>
</div>

