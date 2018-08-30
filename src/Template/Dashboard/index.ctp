<!-- BEGIN: Subheader -->
<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Dashboard
								</h3>
							</div>
							<div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<!--begin:: Widgets/Stats-->
						<div class="m-portlet ">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-md-12 col-lg-6 col-xl-3">
										<!--begin::Total Profit-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Total Rooms
												</h4>
												<br>
												<span class="m-widget24__desc">
													All Customs Value
												</span>
												<span class="m-widget24__stats m--font-brand">
													 <?= $totalRooms?>
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="m-widget24__change">
													Change
												</span>
												<span class="m-widget24__number">
													78%
												</span>
											</div>
										</div>
										<!--end::Total Profit-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-3">
										<!--begin::New Feedbacks-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													New Feedbacks
												</h4>
												<br>
												<span class="m-widget24__desc">
													Customer Review
												</span>
												<span class="m-widget24__stats m--font-info">
													1349
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="m-widget24__change">
													Change
												</span>
												<span class="m-widget24__number">
													84%
												</span>
											</div>
										</div>
										<!--end::New Feedbacks-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-3">
										<!--begin::New Orders-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													New Orders
												</h4>
												<br>
												<span class="m-widget24__desc">
													Fresh Order Amount
												</span>
												<span class="m-widget24__stats m--font-danger">
													567
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="m-widget24__change">
													Change
												</span>
												<span class="m-widget24__number">
													69%
												</span>
											</div>
										</div>
										<!--end::New Orders-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-3">
										<!--begin::New Users-->
										<div class="m-widget24">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													New Users
												</h4>
												<br>
												<span class="m-widget24__desc">
													Joined New User
												</span>
												<span class="m-widget24__stats m--font-success">
													276
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="m-widget24__change">
													Change
												</span>
												<span class="m-widget24__number">
													90%
												</span>
											</div>
										</div>
										<!--end::New Users-->
									</div>
								</div>
							</div>
						</div>
						<!--end:: Widgets/Stats--> 
<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-4">
								<!--begin:: Widgets/New Users-->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													New Users
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
														Today
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
														Month
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_widget4_tab1_content">
												<!--begin::Widget 14-->
												<div class="m-widget4">
													<!--begin::Widget 14 Item-->
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
															<img src="assets/app/media/img/users/100_4.jpg" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
																Anna Strong
															</span>
															<br>
															<span class="m-widget4__sub">
																Visual Designer,Google Inc
															</span>
														</div>
														<div class="m-widget4__ext">
															<a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
																Follow
															</a>
														</div>
													</div>
													<!--end::Widget 14 Item--> 
					<!--begin::Widget 14 Item-->
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
															<img src="assets/app/media/img/users/100_14.jpg" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
																Milano Esco
															</span>
															<br>
															<span class="m-widget4__sub">
																Product Designer, Apple Inc
															</span>
														</div>
														<div class="m-widget4__ext">
															<a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
																Follow
															</a>
														</div>
													</div>
													<!--end::Widget 14 Item--> 
					<!--begin::Widget 14 Item-->
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
															<img src="assets/app/media/img/users/100_11.jpg" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
																Nick Bold
															</span>
															<br>
															<span class="m-widget4__sub">
																Web Developer, Facebook Inc
															</span>
														</div>
														<div class="m-widget4__ext">
															<a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
																Follow
															</a>
														</div>
													</div>
													<!--end::Widget 14 Item--> 
					<!--begin::Widget 14 Item-->
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
															<img src="assets/app/media/img/users/100_1.jpg" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
																Wiltor Delton
															</span>
															<br>
															<span class="m-widget4__sub">
																Project Manager, Amazon Inc
															</span>
														</div>
														<div class="m-widget4__ext">
															<a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
																Follow
															</a>
														</div>
													</div>
													<!--end::Widget 14 Item--> 		
					<!--begin::Widget 14 Item-->
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
															<img src="assets/app/media/img/users/100_5.jpg" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
																Nick Stone
															</span>
															<br>
															<span class="m-widget4__sub">
																Visual Designer, Github Inc
															</span>
														</div>
														<div class="m-widget4__ext">
															<a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
																Follow
															</a>
														</div>
													</div>
													<!--end::Widget 14 Item-->
												</div>
												<!--end::Widget 14-->
											</div>
											<div class="tab-pane" id="m_widget4_tab2_content">
												<!--begin::Widget 14-->
												<div class="m-widget4">
													<!--begin::Widget 14 Item-->
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
															<img src="assets/app/media/img/users/100_2.jpg" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
																Kristika Bold
															</span>
															<br>
															<span class="m-widget4__sub">
																Product Designer,Apple Inc
															</span>
														</div>
														<div class="m-widget4__ext">
															<a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
																Follow
															</a>
														</div>
													</div>
													<!--end::Widget 14 Item--> 
					<!--begin::Widget 14 Item-->
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
															<img src="assets/app/media/img/users/100_13.jpg" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
																Ron Silk
															</span>
															<br>
															<span class="m-widget4__sub">
																Release Manager, Loop Inc
															</span>
														</div>
														<div class="m-widget4__ext">
															<a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
																Follow
															</a>
														</div>
													</div>
													<!--end::Widget 14 Item--> 
					<!--begin::Widget 14 Item-->
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
															<img src="assets/app/media/img/users/100_9.jpg" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
																Nick Bold
															</span>
															<br>
															<span class="m-widget4__sub">
																Web Developer, Facebook Inc
															</span>
														</div>
														<div class="m-widget4__ext">
															<a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
																Follow
															</a>
														</div>
													</div>
													<!--end::Widget 14 Item--> 
					<!--begin::Widget 14 Item-->
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
															<img src="assets/app/media/img/users/100_2.jpg" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
																Wiltor Delton
															</span>
															<br>
															<span class="m-widget4__sub">
																Project Manager, Amazon Inc
															</span>
														</div>
														<div class="m-widget4__ext">
															<a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
																Follow
															</a>
														</div>
													</div>
													<!--end::Widget 14 Item--> 		
					<!--end::Widget 14 Item--> 
					<!--begin::Widget 14 Item-->
													<div class="m-widget4__item">
														<div class="m-widget4__img m-widget4__img--pic">
															<img src="assets/app/media/img/users/100_8.jpg" alt="">
														</div>
														<div class="m-widget4__info">
															<span class="m-widget4__title">
																Nick Bold
															</span>
															<br>
															<span class="m-widget4__sub">
																Web Developer, Facebook Inc
															</span>
														</div>
														<div class="m-widget4__ext">
															<a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">
																Follow
															</a>
														</div>
													</div>
													<!--end::Widget 14 Item-->
												</div>
												<!--end::Widget 14-->
											</div>
										</div>
									</div>
								</div>
								<!--end:: Widgets/New Users-->
							</div>
							<div class="col-xl-4">
								<!--begin:: Widgets/Inbound Bandwidth-->
								<div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Inbound Bandwidth
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
														Today
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">
																					Activity
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">
																					Messages
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">
																					FAQ
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">
																					Support
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<!--begin::Widget5-->
										<div class="m-widget20">
											<div class="m-widget20__number m--font-success">
												670
											</div>
											<div class="m-widget20__chart" style="height:160px;">
												<canvas id="m_chart_bandwidth1"></canvas>
											</div>
										</div>
										<!--end::Widget 5-->
									</div>
								</div>
								<!--end:: Widgets/Inbound Bandwidth-->
								<div class="m--space-30"></div>
								<!--begin:: Widgets/Outbound Bandwidth-->
								<div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Outbound Bandwidth
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
														Today
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">
																					Activity
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">
																					Messages
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">
																					FAQ
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">
																					Support
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<!--begin::Widget5-->
										<div class="m-widget20">
											<div class="m-widget20__number m--font-warning">
												340
											</div>
											<div class="m-widget20__chart" style="height:160px;">
												<canvas id="m_chart_bandwidth2"></canvas>
											</div>
										</div>
										<!--end::Widget 5-->
									</div>
								</div>
								<!--end:: Widgets/Outbound Bandwidth-->
							</div>
							<div class="col-xl-4">
								<!--begin:: Widgets/Top Products-->
								<div class="m-portlet m-portlet--full-height m-portlet--fit ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Top Products
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
														All
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">
																					Activity
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">
																					Messages
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">
																					FAQ
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">
																					Support
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<!--begin::Widget5-->
										<div class="m-widget4 m-widget4--chart-bottom" style="min-height: 480px">
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo3.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														Phyton
													</span>
													<br>
													<span class="m-widget4__sub">
														A Programming Language
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">
														+$17
													</span>
												</span>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo1.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														FlyThemes
													</span>
													<br>
													<span class="m-widget4__sub">
														A Let's Fly Fast Again Language
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">
														+$300
													</span>
												</span>
											</div>
											<div class="m-widget4__item">
												<div class="m-widget4__img m-widget4__img--logo">
													<img src="assets/app/media/img/client-logos/logo4.png" alt="">
												</div>
												<div class="m-widget4__info">
													<span class="m-widget4__title">
														Starbucks
													</span>
													<br>
													<span class="m-widget4__sub">
														Good Coffee & Snacks
													</span>
												</div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">
														+$300
													</span>
												</span>
											</div>
											<div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20" style="height:260px;">
												<canvas id="m_chart_trends_stats_2"></canvas>
											</div>
										</div>
										<!--end::Widget 5-->
									</div>
								</div>
								<!--end:: Widgets/Top Products-->
							</div>
						</div>
						<!--End::Section-->
<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-6">
								<!--begin:: Widgets/Support Cases-->
								<div class="m-portlet  m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Support Cases
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
														<i class="la la-ellipsis-h m--font-brand"></i>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Quick Actions
																			</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">
																					Activity
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">
																					Messages
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">
																					FAQ
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">
																					Support
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit"></li>
																		<li class="m-nav__item">
																			<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																				Cancel
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget16">
											<div class="row">
												<div class="col-md-5">
													<div class="m-widget16__head">
														<div class="m-widget16__item">
															<span class="m-widget16__sceduled">
																Type
															</span>
															<span class="m-widget16__amount m--align-right">
																Amount
															</span>
														</div>
													</div>
													<div class="m-widget16__body">
														<!--begin::widget item-->
														<div class="m-widget16__item">
															<span class="m-widget16__date">
																EPS
															</span>
															<span class="m-widget16__price m--align-right m--font-brand">
																+78,05%
															</span>
														</div>
														<!--end::widget item-->	
						<!--begin::widget item-->
														<div class="m-widget16__item">
															<span class="m-widget16__date">
																PDO
															</span>
															<span class="m-widget16__price m--align-right m--font-accent">
																21,700
															</span>
														</div>
														<!--end::widget item-->
						<!--begin::widget item-->
														<div class="m-widget16__item">
															<span class="m-widget16__date">
																OPL Status
															</span>
															<span class="m-widget16__price m--align-right m--font-danger">
																Negative
															</span>
														</div>
														<!--end::widget item-->
						<!--begin::widget item-->
														<div class="m-widget16__item">
															<span class="m-widget16__date">
																Priority
															</span>
															<span class="m-widget16__price m--align-right m--font-brand">
																+500,200
															</span>
														</div>
														<!--end::widget item-->
						<!--begin::widget item-->
														<div class="m-widget16__item">
															<span class="m-widget16__date">
																Net Prifit
															</span>
															<span class="m-widget16__price m--align-right m--font-brand">
																$18,540,60
															</span>
														</div>
														<!--end::widget item-->
													</div>
												</div>
												<div class="col-md-7">
													<div class="m-widget16__stats">
														<div class="m-widget16__visual">
															<div id="m_chart_support_tickets" style="height: 180px"></div>
														</div>
														<div class="m-widget16__legends">
															<div class="m-widget16__legend">
																<span class="m-widget16__legend-bullet m--bg-info"></span>
																<span class="m-widget16__legend-text">
																	20% Margins
																</span>
															</div>
															<div class="m-widget16__legend">
																<span class="m-widget16__legend-bullet m--bg-accent"></span>
																<span class="m-widget16__legend-text">
																	80% Profit
																</span>
															</div>
															<div class="m-widget16__legend">
																<span class="m-widget16__legend-bullet m--bg-danger"></span>
																<span class="m-widget16__legend-text">
																	10% Lost
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end:: Widgets/Support Stats-->
							</div>
							<div class="col-xl-6">
								<!--begin:: Finance Stats-->
								<div class="m-portlet  m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Finance Stats
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
														<i class="la la-ellipsis-h m--font-brand"></i>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Quick Actions
																			</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">
																					Activity
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">
																					Messages
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">
																					FAQ
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">
																					Support
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit"></li>
																		<li class="m-nav__item">
																			<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																				Cancel
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-widget1 m-widget1--paddingless">
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															IPO Margin
														</h3>
														<span class="m-widget1__desc">
															Awerage IPO Margin
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-accent">
															+24%
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Payments
														</h3>
														<span class="m-widget1__desc">
															Yearly Expenses
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-info">
															+$560,800
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Logistics
														</h3>
														<span class="m-widget1__desc">
															Overall Regional Logistics
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-warning">
															-10%
														</span>
													</div>
												</div>
											</div>
											<div class="m-widget1__item">
												<div class="row m-row--no-padding align-items-center">
													<div class="col">
														<h3 class="m-widget1__title">
															Expenses
														</h3>
														<span class="m-widget1__desc">
															Balance
														</span>
													</div>
													<div class="col m--align-right">
														<span class="m-widget1__number m--font-danger">
															$345,000
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end:: Finance Stats-->
							</div>
						</div>
						<!--End::Section-->

<!--Begin::Section-->
						<div class="row">
							<div class="col-xl-6 col-lg-12">
								<!--Begin::Portlet-->
								<div class="m-portlet  m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Recent Activities
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="m-portlet__nav">
												<li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
													<a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
														<i class="la la-ellipsis-h m--font-brand"></i>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav">
																		<li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Quick Actions
																			</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">
																					Activity
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">
																					Messages
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">
																					FAQ
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">
																					Support
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit"></li>
																		<li class="m-nav__item">
																			<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
																				Cancel
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="380" style="overflow: visible; height: 380px; max-height: 380px; position: relative;">
											<!--Begin::Timeline 2 -->
											<div class="m-timeline-2">
												<div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
													<div class="m-timeline-2__item">
														<span class="m-timeline-2__item-time">
															10:00
														</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-danger"></i>
														</div>
														<div class="m-timeline-2__item-text  m--padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
															<br>
															incididunt ut labore et dolore magna
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">
															12:45
														</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-success"></i>
														</div>
														<div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
															AEOL Meeting With
														</div>
														<div class="m-list-pics m-list-pics--sm m--padding-left-20">
															<a href="#">
																<img src="assets/app/media/img/users/100_4.jpg" title="">
															</a>
															<a href="#">
																<img src="assets/app/media/img/users/100_13.jpg" title="">
															</a>
															<a href="#">
																<img src="assets/app/media/img/users/100_11.jpg" title="">
															</a>
															<a href="#">
																<img src="assets/app/media/img/users/100_14.jpg" title="">
															</a>
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">
															14:00
														</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-brand"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Make Deposit
															<a href="#" class="m-link m-link--brand m--font-bolder">
																USD 700
															</a>
															To ESL.
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">
															16:00
														</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-warning"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
															<br>
															incididunt ut labore et dolore magna elit enim at minim
															<br>
															veniam quis nostrud
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">
															17:00
														</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-info"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Placed a new order in
															<a href="#" class="m-link m-link--brand m--font-bolder">
																SIGNATURE MOBILE
															</a>
															marketplace.
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">
															16:00
														</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-brand"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
															<br>
															incididunt ut labore et dolore magna elit enim at minim
															<br>
															veniam quis nostrud
														</div>
													</div>
													<div class="m-timeline-2__item m--margin-top-30">
														<span class="m-timeline-2__item-time">
															17:00
														</span>
														<div class="m-timeline-2__item-cricle">
															<i class="fa fa-genderless m--font-danger"></i>
														</div>
														<div class="m-timeline-2__item-text m--padding-top-5">
															Received a new feedback on
															<a href="#" class="m-link m-link--brand m--font-bolder">
																FinancePro App
															</a>
															product.
														</div>
													</div>
												</div>
											</div>
											<!--End::Timeline 2 -->
										</div>
									</div>
								</div>
								<!--End::Portlet-->
							</div>
							<div class="col-xl-6 col-lg-12">
								<!--Begin::Portlet-->
								<div class="m-portlet m-portlet--full-height ">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Recent Notifications
												</h3>
											</div>
										</div>
										<div class="m-portlet__head-tools">
											<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
														Today
													</a>
												</li>
												<li class="nav-item m-tabs__item">
													<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content" role="tab">
														Month
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="m-portlet__body">
										<div class="tab-content">
											<div class="tab-pane active" id="m_widget2_tab1_content">
												<!--Begin::Timeline 3 -->
												<div class="m-timeline-3">
													<div class="m-timeline-3__items">
														<div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time">
																09:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Bob
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--warning">
															<span class="m-timeline-3__item-time">
																10:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit amit
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Sean
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time">
																11:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit amit eiusmdd tempor
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By James
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--success">
															<span class="m-timeline-3__item-time">
																12:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By James
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--danger">
															<span class="m-timeline-3__item-time">
																14:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit amit,consectetur eiusmdd
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Derrick
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time">
																15:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit amit,consectetur
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Iman
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time">
																17:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem ipsum dolor sit consectetur eiusmdd tempor
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Aziko
																	</a>
																</span>
															</div>
														</div>
													</div>
												</div>
												<!--End::Timeline 3 -->
											</div>
											<div class="tab-pane" id="m_widget2_tab2_content">
												<!--Begin::Timeline 3 -->
												<div class="m-timeline-3">
													<div class="m-timeline-3__items">
														<div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time m--font-focus">
																09:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Contrary to popular belief, Lorem Ipsum is not simply random text.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Bob
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--warning">
															<span class="m-timeline-3__item-time m--font-warning">
																10:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	There are many variations of passages of Lorem Ipsum available.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Sean
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time m--font-primary">
																11:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Contrary to popular belief, Lorem Ipsum is not simply random text.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By James
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--success">
															<span class="m-timeline-3__item-time m--font-success">
																12:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By James
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--danger">
															<span class="m-timeline-3__item-time m--font-warning">
																14:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Latin words, combined with a handful of model sentence structures.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Derrick
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--info">
															<span class="m-timeline-3__item-time m--font-info">
																15:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Contrary to popular belief, Lorem Ipsum is not simply random text.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Iman
																	</a>
																</span>
															</div>
														</div>
														<div class="m-timeline-3__item m-timeline-3__item--brand">
															<span class="m-timeline-3__item-time m--font-danger">
																17:00
															</span>
															<div class="m-timeline-3__item-desc">
																<span class="m-timeline-3__item-text">
																	Lorem Ipsum is therefore always free from repetition, injected humour.
																</span>
																<br>
																<span class="m-timeline-3__item-user-name">
																	<a href="#" class="m-link m-link--metal m-timeline-3__item-link">
																		By Aziko
																	</a>
																</span>
															</div>
														</div>
													</div>
												</div>
												<!--End::Timeline 3 -->
											</div>
										</div>
									</div>
								</div>
								<!--End::Portlet-->
							</div>
						</div>
						<!--End::Section-->

 

					</div>