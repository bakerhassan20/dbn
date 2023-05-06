	<!-- header start -->
	<header class="fixed-header">
	    <!-- logo start -->
	    <div class="header-logo js-midnight-color js-headroom" id="logo-box">
	        <div class="hidden-box">
	            <a href="index.html" class="header-logo__box js-pointer-large js-animsition-link">
	        <img class="header-logo__img white" src="{{URL::asset('assets/frontend/images/logo/logo-white.png')}}" alt="logo">

	                <img class="header-logo__img black" src="{{URL::asset('assets/frontend/images/logo/logo-black.png')}}" alt="logo">
	            </a>
	        </div>
	    </div><!-- logo end -->

	    <!-- menu-icon start -->
	    <div class="menu-icon js-menu-open-close js-pointer-large js-midnight-color js-headroom" id="menu-box">
	        <div class="menu-icon__box">
	            <span class="menu-icon__inner"></span>
	            <span class="menu-icon__close"></span>
	        </div>
	    </div><!-- menu-icon end -->

	    <!-- header-contact start -->
	    <div class="header-contact js-midnight-color js-headroom">
	        <div class="header-contact__flex">
	            <div class="header-contact__anim">
	                <a href="#" class="header-contact__btn vertical-text center js-pointer-large">
	                    <span class="vertical-text__inner"><i class="far fa-comment-dots"></i> Get in touch</span>
	                </a>
	            </div>
	        </div>
	    </div><!-- header-contact end -->

	    <!-- header-social start -->
	    <!-- <div class="header-social after-preloader-anim js-midnight-color js-headroom">
			<ul class="list list_center list_margin-20px hidden-box">
				<li class="list__item">
					<div class="hidden-box d-inline-block">
						<a href="#" class="anim-slide js-pointer-small">
							<i class="fab fa-facebook-f"></i>
						</a>
					</div>
				</li>
				<li class="list__item">
					<div class="hidden-box d-inline-block">
						<a href="#" class="anim-slide tr-delay-02 js-pointer-small">
							<i class="fab fa-twitter"></i>
						</a>
					</div>
				</li>
				<li class="list__item">
					<div class="hidden-box d-inline-block">
						<a href="#" class="anim-slide tr-delay-04 js-pointer-small">
							<i class="fab fa-instagram"></i>
						</a>
					</div>
				</li>
				<li class="list__item">
					<div class="hidden-box d-inline-block">
						<a href="#" class="anim-slide tr-delay-06 js-pointer-small">
							<i class="fab fa-behance"></i>
						</a>
					</div>
				</li>
				<li class="list__item">
					<div class="hidden-box d-inline-block">
						<a href="#" class="anim-slide tr-delay-08 js-pointer-small">
							<i class="fab fa-dribbble"></i>
						</a>
					</div>
				</li>
				<li class="list__item">
					<div class="hidden-box d-inline-block">
						<a href="#" class="anim-slide tr-delay-10 js-pointer-small">
							<i class="fab fa-youtube"></i>
						</a>
					</div>
				</li>
			</ul>
		</div> -->
	    <!-- header-social end -->
	</header><!-- header end -->

	<!-- navigation start -->
	<nav class="nav-container pos-rel js-dropdown-active-box">
	    <!-- pos-rel start -->
	    <div class="pos-rel height-100perc">
	        <!-- dropdown close btn start -->
	        <div class="dropdown-close">
	            <div class="dropdown-close__inner js-dropdown-close js-pointer-large">
	                <span class="dropdown-close__arrow"></span>
	            </div>
	        </div><!-- dropdown close btn end -->


	        <!-- menu-box start -->
	        <ul class="menu-box">

	            <!-- nav-btn-box start -->
	            <li class="nav-btn-box">
	                <a href="index.php" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
	                    <span class="nav-btn__inner" data-text="Home">Home</span>
	                </a>
	            </li><!-- nav-btn-box end -->

	            <!-- nav-btn-box start -->
	            <li class="nav-btn-box">
	                <a href="about-us.php" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
	                    <span class="nav-btn__inner" data-text="About DBN">About DBN</span>
	                </a>
	            </li><!-- nav-btn-box end -->

	            <!-- nav-btn-box start -->
	            <li class="nav-btn-box js-dropdown-open">
	                <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
	                    <span class="nav-btn__inner" data-text="Our Works">Our Works</span>
	                </a>

	                <!-- dropdown start -->
	                <ul class="menu-box dropdown js-dropdown">
	                    <li class="nav-btn-box">
	                        <a href="project.php" class="nav-btn js-animsition-link js-pointer-large">
	                            <span class="nav-btn__inner" data-text="Interior Design">Interior Design</span>
	                        </a>
	                    </li>
	                    <li class="nav-btn-box">
	                        <a href="project.php" class="nav-btn js-animsition-link js-pointer-large">
	                            <span class="nav-btn__inner" data-text="Branding Design">Branding Design</span>
	                        </a>
	                    </li>


	                </ul><!-- dropdown end -->
	            </li><!-- nav-btn-box end -->

	            <!-- nav-btn-box start -->
	            <li class="nav-btn-box js-dropdown-open">
	                <a class="nav-btn large dropdown-hidden-btn js-pointer-large">
	                    <span class="nav-btn__inner" data-text="Career">Career</span>
	                </a>

	                <!-- dropdown start -->
	                <ul class="menu-box dropdown js-dropdown">
	                    <li class="nav-btn-box">
	                        <a href="{{ route('join-us') }}" class="nav-btn js-animsition-link js-pointer-large">
	                            <span class="nav-btn__inner" data-text="Join Us">Join Us </span>
	                        </a>
	                    </li>
	                    <li class="nav-btn-box">
	                        <a href="{{ route('cooperative-training') }}" class="nav-btn js-animsition-link js-pointer-large">
	                            <span class="nav-btn__inner" data-text="Cooperative Training">Cooperative Training</span>
	                        </a>
	                    </li>


	                </ul><!-- dropdown end -->
	            </li><!-- nav-btn-box end -->

	            <!-- nav-btn-box start -->
	            <li class="nav-btn-box">
	                <a href="{{ route('contact-us') }}" class="nav-btn large dropdown-hidden-btn js-animsition-link js-pointer-large">
	                    <span class="nav-btn__inner" data-text="Contact">Contact</span>
	                </a>
	            </li><!-- nav-btn-box end -->
	        </ul><!-- menu-box end -->

	        <!-- nav-information start -->
	        <div class="nav-information">
	            <!-- nav-email start -->
	            <div>
	                <div class="hidden-box d-inline-block">
	                    <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Email</div>
	                </div>
	                <div class="nav-fade-anim js-nav-anim margin-top-10">
	                    <a href="#"
	                        class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">email@umaya_agency.com</a><br>
	                    <a href="#"
	                        class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">email@umaya_job.com</a>
	                </div>
	            </div><!-- nav-email end -->

	            <!-- nav-address start -->
	            <div>
	                <div class="hidden-box d-inline-block">
	                    <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Address</div>
	                </div>
	                <div class="nav-fade-anim js-nav-anim margin-top-10">
	                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">
	                        PO Box 223158 Oliver Street<br>
	                        East Victoria 2006 UK
	                    </a>
	                </div>
	            </div><!-- nav-address end -->

	            <!-- nav-phone start -->
	            <div>
	                <div class="hidden-box d-inline-block">
	                    <div class="headline-xxxxs nav-title-color nav-reveal-anim js-nav-anim">Phone</div>
	                </div>
	                <div class="nav-fade-anim js-nav-anim margin-top-10">
	                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+23 8 8532
	                        7834</a><br>
	                    <a href="#" class="subhead-xxs nav-text-color text-hover-to-red js-pointer-small">+23 8 9635
	                        7335</a>
	                </div>
	            </div><!-- nav-phone end -->
	        </div><!-- nav-information end -->

	        <!-- nav-copyright start -->
	        <div class="nav-copyright text-right">
	            <p class="copyright-style nav-fade-anim js-nav-anim">
	                &copy; Copyright 2023    Design By N.
	            </p>
	        </div><!-- nav-copyright end -->
	    </div><!-- pos-rel end -->
	</nav><!-- navigation end -->
