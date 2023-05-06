@extends('layouts.frontend.app')
@section('content')

	<!-- main start -->
	<main class="js-animsition-overlay" data-animsition-overlay="true">
		<!-- page head start -->
		<section id="up" class="pos-rel section-bg-dark-1">
			<!-- pos-rel start -->
   <div class="pos-rel flex-min-height-100vh">
                <div class="container padding-top-bottom-120 after-preloader-anim">
                    <h2 class="headline-m">
                        <span class="anim-text-double-fill invert" data-text="Why We">Why We</span>
                        <span class="anim-text-double-fill invert tr-delay-02" data-text="are the">are
                            the</span>
                        <span class="anim-text-double-fill tr-delay-04" data-text="Best">Best</span>
                    </h2>
                    <h3 class="subhead-xs text-color-dadada margin-top-10 anim-fade tr-delay-04">Best Solutions
                        for Your Business</h3>
                    <p class="body-text-s margin-top-20 anim-text-reveal tr-delay-06 about-text">Plaid retro migas venmo
                        lo-fi ethical artisan fingerstache seitan you probably haven't heard of them fam
                        keffiyeh iPhone stumptown chia. Godard 3 wolf moon tacos try-hard, raw denim locavore
                        messenger bag portland. Blue bottle hashtag schlitz etsy knausgaard, aesthetic tacos
                        freegan lomo deep v fashion axe.</p>
                </div>
            </div><!-- pos-rel end
		</section><!-- page head end -->

		<!-- work process start -->
		<section id="down" class="pos-rel section-bg-light-1" data-midnight="black">
			<!-- pos-rel start -->
			<div class="pos-rel flex-min-height-100vh">
				<!-- container start -->
				<div class="container padding-top-bottom-120">
					<h2 class="headline-xxs text-color-black hidden-box">
						<span class="anim-slide js-scrollanim">Work Process</span>
					</h2>

					<!-- flex-container start -->
					<div class="flex-container padding-top-30">
						<!-- column start -->
						<div class="four-columns column-100-100 padding-top-60">
							<div class="column-r-margin-40-999 js-scrollanim">
								<span class="subhead-xxl text-color-red d-block hidden-box">
									<span class="anim-slide">01</span>
								</span>
								<h3 class="headline-xxxs text-color-black margin-top-30 hidden-box">
									<span class="anim-slide tr-delay-01">Brainstorming</span>
								</h3>
								<p class="body-text-s text-color-black margin-top-20 anim-text-reveal tr-delay-02">Pok
									pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh
									mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki
									thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan
									messenger bag raw denim swag drinking vinegar.</p>
							</div>
						</div><!-- column end -->

						<!-- column start -->
						<div class="four-columns column-100-100 padding-top-60">
							<div class="column-r-margin-40-999 js-scrollanim">
								<span class="subhead-xxl text-color-red d-block hidden-box">
									<span class="anim-slide">02</span>
								</span>
								<h3 class="headline-xxxs text-color-black margin-top-30 hidden-box">
									<span class="anim-slide tr-delay-01">Approaching</span>
								</h3>
								<p class="body-text-s text-color-black margin-top-20 anim-text-reveal tr-delay-02">Pok
									pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh
									mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki
									thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan
									messenger bag raw denim swag drinking vinegar.</p>
							</div>
						</div><!-- column end -->

						<!-- column start -->
						<div class="four-columns column-100-100 padding-top-60">
							<div class="column-r-margin-40-999 js-scrollanim">
								<span class="subhead-xxl text-color-red d-block hidden-box">
									<span class="anim-slide">03</span>
								</span>
								<h3 class="headline-xxxs text-color-black margin-top-30 hidden-box">
									<span class="anim-slide tr-delay-01">Adjusting</span>
								</h3>
								<p class="body-text-s text-color-black margin-top-20 anim-text-reveal tr-delay-02">Pok
									pok authentic fashion axe, vegan venmo leggings raclette tousled twee tattooed. Banh
									mi humblebrag hammock tacos fashion axe aesthetic vegan sustainable taiyaki
									thundercats jean shorts tousled cloud bread waistcoat kogi. Cloud bread cardigan
									messenger bag raw denim swag drinking vinegar.</p>
							</div>
						</div><!-- column end -->
					</div><!-- flex-container end -->
				</div><!-- container end -->
			</div><!-- pos-rel end -->
		</section><!-- work process end -->

		<!-- how we do start -->
		<section class="pos-rel section-bg-dark-1">
			<!-- pos-rel start -->
			<!-- pos-rel start -->
			<div class="pos-rel flex-min-height-100vh">
				<!-- flex-container start -->
				<div class="container flex-container padding-top-60 padding-bottom-120">
					<!-- column start -->
					<div class="five-columns column-100-100 padding-top-60">
						<div class="column-r-margin-40-999 js-scrollanim">
							<h2 class="headline-m text-color-white hidden-box">
								<span class="anim-slide">Our Services</span>
							</h2>
							<div class="margin-top-30 anim-fade tr-delay-02">
								<a class="skew-btn js-pointer-large"
									style=" margin-bottom: 10px;">
									<span class="skew-btn__box">
										<span class="skew-btn__content text-color-white">Join Us</span>
										<span class="skew-btn__arrow white"></span>
									</span>

								</a>



							</div>
						</div>
					</div><!-- column end -->

					<!-- column start -->
					<div class="seven-columns column-100-100 padding-top-60">
						<div id="joinus">
							<div class="js-scrollanim">
								<h3 class="headline-xxxs text-color-white hidden-box">
									<span class="anim-slide">Flexitarian Hella</span>
								</h3>
								<p class="body-text-s text-color-white margin-top-20 anim-text-reveal tr-dela02">Hot
									chicken
									coloring book cliche YOLO, crucifix kale chips swag hexagon raclette paleo next
									level
									austin. Pinterest lumbersexual forage chillwave godard pitchfork vexillologist deep
									v
									chia truffaut four dollar toast food truck meditation.</p>
							</div>

							<form action="{{ route('join.save') }}" method="post" name="formobrsv" id="joinus_form" enctype="multipart/form-data"
								class="flex-container padding-top-90">
                                   {{ csrf_field() }}
								<!-- column start -->
								<div class="twelve-columns">
									<div class="column-r-margin-10">
										<input type="text" name="name" placeholder="Enter your name"id="first_name" required="" class="form-input js-pointer-small">
									</div>
                                      <div class="text-danger">{{$errors->first('name')}}</div>
								</div><!-- column end -->

								<!-- column start -->
								<div class="twelve-columns">
									<div class="column-r-margin-10">
										<input type="email" name="email" placeholder="Enter your email address"
											id="email" required="" class="form-input js-pointer-small">
									</div>
                                      <div class="text-danger">{{$errors->first('email')}}</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="twelve-columns">
									<div class="column-r-margin-10">
										<select id="position" name="position" required=""
											class="form-input js-pointer-small">
											<option value="" disabled="" selected="" hidden="">Position</option>
											<option value="Graphic Design Intern">Graphic Design Intern</option>
											<option value="Branding Creative Director">Creative Director</option>
											<option value="Branding Business Developer">Business Developer</option>
											<option value="Creative Copywriter">Creative Copywriter</option>
											<option value="Branding Art Director">Art Director</option>
											<option value="Graphic Designer">Senior Graphic Designer</option>
											<option value="Account Manager">Senior Account Manager</option>
											<option value="Other">Other</option>
										</select>
									</div>
                                      <div class="text-danger">{{$errors->first('position')}}</div>
								</div><!-- column end -->

								<div class="twelve-columns">
									<div class="column-r-margin-10">
										<select id="preferred" name="preferred" required=""
											class="form-input js-pointer-small">
											<option value="" disabled="" selected="" hidden="">Preferred work location
											</option>
											<option value="Riyadh">Riyadh</option>
											<option value="Dammam">Dammam</option>
											<option value="Remote work">Remote work</option>
											<option value="No preference">No preference </option>
										</select>
									</div>
                                      <div class="text-danger">{{$errors->first('preferred')}}</div>
								</div><!-- column end -->
								<!-- column start -->
								<div class="twelve-columns">
									<div class="column-r-margin-10">
										<input type="file" name="file" placeholder="Upload CV" id="file" required="" accept=".pdf,.doc,.docx"
											class="form-input js-pointer-small">
									</div>
                                      <div class="text-danger">{{$errors->first('file')}}</div>
								</div><!-- column end -->

								<!-- column start -->
								<div class="twelve-columns">
									<textarea name="message" placeholder="Enter your message" id="message" required=""
										class="form-input js-pointer-small"></textarea>
                                          <div class="text-danger">{{$errors->first('message')}}</div>
								</div><!-- column end -->

								<!-- column start -->
								<div class="twelve-columns text-center padding-top-90">
									<button type="submit" id="send" class="border-btn js-pointer-large">
										<span class="border-btn__inner">submit</span>
										<span class="btn-wait">Wait</span>
										<span class="border-btn__lines-1"></span>
										<span class="border-btn__lines-2"></span>
									</button>
								</div><!-- column end -->
							</form>
						</div>



					</div><!-- column end -->


				</div><!-- flex-container end -->
			</div><!-- pos-rel end -->
		</section><!-- how we do end -->


	</main><!-- main end -->
@endsection
