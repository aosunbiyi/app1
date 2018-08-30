


<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Hotel Manager';
?>


<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
                <?= $cakeDescription ?>:
                <?= $this->fetch('title') ?>
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->



             <?= $this->Html->css('../assets/vendors/custom/datatables/datatables.bundle.css') ?>
             <?= $this->Html->css('../assets/vendors/base/vendors.bundle.css') ?>
             <?= $this->Html->css('../assets/demo/demo2/base/style.bundle.css') ?>
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="assets/demo/demo2/media/img/logo/favicon.ico" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body  class="m-page--wide m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- begin::Header -->
			<header id="m_header" class="m-grid__item m-header "  minimize="minimize" minimize-offset="200" minimize-mobile-offset="200" >
				<div class="m-header__top">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Brand -->
							<div class="m-stack__item m-brand">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="/Dashboard" class="m-brand__logo-wrapper">
                                           
                                            <?php echo $this->Html->image('../assets/demo/demo2/media/img/logo/logo.png', ['fullBase' => true]); ?>
										</a>
									</div>
									<div class="m-stack__item m-stack__item--middle m-brand__tools">
										<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
											<a href="#" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
												<span>
													Dashboard
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav">
																<li class="m-nav__section m-nav__section--first m--hide">
																	<span class="m-nav__section-text">
																		Quick Menu
																	</span>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">
																			Human Resources
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			Customer Relationship
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">
																			Order Processing
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">
																			Accounting
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			Customer Relationship
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">
																			Order Processing
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- BEGIN: Responsive Aside Left Menu Toggler -->
										<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>
										<!-- END -->
						<!-- begin::Responsive Header Menu Toggler-->
										<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>
										<!-- end::Responsive Header Menu Toggler-->
			<!-- begin::Topbar Toggler-->
										<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
											<i class="flaticon-more"></i>
										</a>
										<!--end::Topbar Toggler-->
									</div>
								</div>
							</div>
							<!-- end::Brand -->		
			
						</div>
					</div>
				</div>
				<div class="m-header__bottom">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Horizontal Menu -->
							<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
								<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
									<i class="la la-close"></i>
								</button>
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item "  aria-haspopup="true">
											<a  href="/Dashboard" class="m-menu__link ">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Dashboard
												</span>
											</a>
										</li>
                                    
                                        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  m-menu-submenu-toggle="click" aria-haspopup="true">
											<a  href="javascript:;" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Property Configurations
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
												
												<li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
														<a  href="javascript:;" class="m-menu__link m-menu__toggle">
															<i class="m-menu__link-icon flaticon-business"></i>
															<span class="m-menu__link-text">
                                                            Property Setup
															</span>
															<i class="m-menu__hor-arrow la la-angle-right"></i>
															<i class="m-menu__ver-arrow la la-angle-right"></i>
														</a>
														<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
															<span class="m-menu__arrow "></span>
															<ul class="m-menu__subnav">
																
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/PropertyDetails" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                        Property Details
																		</span>
																	</a>
                                                                </li>
                                                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/wings" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                        Wings
																		</span>
																	</a>
                                                                </li>
                                                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/floors" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                       Floors
																		</span>
																	</a>
																</li>
                                                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/room-types" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                        Room Types
																		</span>
																	</a>
                                                                </li>
                                                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/room-owners" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                        Room Owner
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/Rooms" class="m-menu__link ">
																		<span class="m-menu__link-text">
																		     Rooms
																		</span>
																	</a>
                                                                </li>
                                                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/rate-types" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                        Rate Types
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/Rates" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Rates
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/Seasons" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Seasons
																		</span>
																	</a>
                                                                </li>
                                                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/week-days" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                        Week Days
																		</span>
																	</a>
																</li>
                                                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/amenity-types" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                        Amenity Type
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/Amenities" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                        Amenities
																		</span>
																	</a>
																</li>
													
                                                                <li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/NonRentalUnits" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                        Non Rental Units
																		</span>
																	</a>
																</li>
															</ul>
														</div>
                                                    </li>
                                                    
                                                    <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
														<a  href="javascript:;" class="m-menu__link m-menu__toggle">
															<i class="m-menu__link-icon flaticon-settings-1"></i>
															<span class="m-menu__link-text">
                                                            Main Configuration
															</span>
															<i class="m-menu__hor-arrow la la-angle-right"></i>
															<i class="m-menu__ver-arrow la la-angle-right"></i>
														</a>
														<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
															<span class="m-menu__arrow "></span>
															<ul class="m-menu__subnav">
																
															<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/Taxes" class="m-menu__link ">
																		<span class="m-menu__link-text">
																		Tax Setup
																		</span>
																	</a>
																</li>
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/ExchangeRates" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Exchange Rate
																		</span>
																	</a>
																</li>
																
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/SettlementTypes" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Settlement Type
																		</span>
																	</a>
																</li>
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/card-type-prefixes" class="m-menu__link ">
																		<span class="m-menu__link-text">
																		Card Type Prefix
																		</span>
																	</a>
																</li>
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/hotel-representatives" class="m-menu__link ">
																		<span class="m-menu__link-text">
																		Hotel Representatives
																		</span>
																	</a>
																</li>
																
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/AccountTypes" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Account Type
																		</span>
																	</a>
																</li>
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/Accounts" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Accounts
																		</span>
																	</a>
																</li>
															
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/business-source-types" class="m-menu__link ">
																		<span class="m-menu__link-text">
																		Business Source Type
																		</span>
																	</a>
																</li>

																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/BusinessSources" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Business Source
																		</span>
																	</a>
																</li>
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/ExtraChargeCategories" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Extra Charge Category
																		</span>
																	</a>
																</li>
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/ExtraCharges" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Extra Charge
																		</span>
																	</a>
																</li>
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/MealPlans" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Meal Plan
																		</span>
																	</a>
																</li>
																<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																	<a  href="/RevenueBreakdowns" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Revenue Breakdown
																		</span>
																	</a>
																</li>
																					
															</ul>
														</div>
                                                    </li>
                                                    
                                                   
                                                    
                                                    <li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true">
														<a  href="javascript:;" class="m-menu__link m-menu__toggle">
															<i class="m-menu__link-icon flaticon-more-v5"></i>
															<span class="m-menu__link-text">
                                                            Advance Settings	
															</span>
															<i class="m-menu__hor-arrow la la-angle-right"></i>
															<i class="m-menu__ver-arrow la la-angle-right"></i>
														</a>
														<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
															<span class="m-menu__arrow "></span>
															<ul class="m-menu__subnav">
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="/PropertyDetails" class="m-menu__link ">
																		<span class="m-menu__link-text">
                                                                        Property Details
																		</span>
																	</a>
                                                                </li>
																						
																		<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																			<a  href="/EmailAccounts" class="m-menu__link ">
																				<span class="m-menu__link-text">
																					Email Accounts
																				</span>
																			</a>
																		</li>
																	
																
																		<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																			<a  href="/Notices" class="m-menu__link ">
																				<span class="m-menu__link-text">
																					Notice
																				</span>
																			</a>
																		</li>
																		<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																			<a  href="/Identities" class="m-menu__link ">
																				<span class="m-menu__link-text">
																					Identities
																				</span>
																			</a>
																		</li>
																		<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																			<a  href="/DnrLists" class="m-menu__link ">
																				<span class="m-menu__link-text">
																					DNR Reason
																				</span>
																			</a>
																		</li>
																		
																		<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
																			<a  href="/FollowUpTypes" class="m-menu__link ">
																				<span class="m-menu__link-text">
																					Followup Type
																				</span>
																			</a>
																		</li>
									
                                                                
															</ul>
														</div>
													</li>

													
												
												</ul>
											</div>
										</li>

								
										<li class="m-menu__item  m-menu__item--submenu"  m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true">
											<a  href="javascript:;" class="m-menu__link m-menu__toggle">
												<span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
                                                Reports
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu  m-menu__submenu--fixed-xl m-menu__submenu--center" >
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<div class="m-menu__subnav">
													<ul class="m-menu__content">
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	Finance Reports
																</span>
																<i class="m-menu__ver-arrow la la-angle-right"></i>
															</h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-map"></i>
																		<span class="m-menu__link-text">
																			Annual Reports
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-user"></i>
																		<span class="m-menu__link-text">
																			HR Reports
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-clipboard"></i>
																		<span class="m-menu__link-text">
																			IPO Reports
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-graphic-1"></i>
																		<span class="m-menu__link-text">
																			Finance Margins
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-graphic-2"></i>
																		<span class="m-menu__link-text">
																			Revenue Reports
																		</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	Project Reports
																</span>
																<i class="m-menu__ver-arrow la la-angle-right"></i>
															</h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--line">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Coca Cola CRM
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--line">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Delta Airlines Booking Site
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--line">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Malibu Accounting
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--line">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Vineseed Website Rewamp
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--line">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Zircon Mobile App
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--line">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Mercury CMS
																		</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	HR Reports
																</span>
																<i class="m-menu__ver-arrow la la-angle-right"></i>
															</h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Staff Directory
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Client Directory
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Salary Reports
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Staff Payslips
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Corporate Expenses
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																			<span></span>
																		</i>
																		<span class="m-menu__link-text">
																			Project Expenses
																		</span>
																	</a>
																</li>
															</ul>
														</li>
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle">
																<span class="m-menu__link-text">
																	Reporting Apps
																</span>
																<i class="m-menu__ver-arrow la la-angle-right"></i>
															</h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Report Adjusments
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Sources & Mediums
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Reporting Settings
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Conversions
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Report Flows
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  m-menu-link-redirect="1" aria-haspopup="true">
																	<a  href="inner.html" class="m-menu__link ">
																		<span class="m-menu__link-text">
																			Audit & Logs
																		</span>
																	</a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</li>
									
									</ul>
								</div>
							</div>
							<!-- end::Horizontal Menu -->	
				<!--begin::Search-->
							<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-" id="m_quicksearch" m-quicksearch-mode="default">
								<!--begin::Search Form -->
								<form class="m-header-search__form">
									<div class="m-header-search__wrapper">
										<span class="m-header-search__icon-search" id="m_quicksearch_search">
											<i class="la la-search"></i>
										</span>
										<span class="m-header-search__input-wrapper">
											<input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
										</span>
										<span class="m-header-search__icon-close" id="m_quicksearch_close">
											<i class="la la-remove"></i>
										</span>
										<span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
											<i class="la la-remove"></i>
										</span>
									</div>
								</form>
								<!--end::Search Form -->
	<!--begin::Search Results -->
								<div class="m-dropdown__wrapper">
									<div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
									<div class="m-dropdown__inner">
										<div class="m-dropdown__body">
											<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-max-height="300" data-mobile-max-height="200">
												<div class="m-dropdown__content m-list-search m-list-search--skin-light"></div>
											</div>
										</div>
									</div>
								</div>
								<!--end::Search Results -->
							</div>
							<!--end::Search-->
						</div>
					</div>
				</div>
			</header>
			<!-- end::Header -->		
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close m-aside-left-close--skin-light" id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item m-aside-left ">
					<!-- BEGIN: Aside Menu -->
	<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " 
		data-menu-vertical="true"
		 m-menu-scrollable="0" m-menu-dropdown-timeout="500"  
		>
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="m-menu__section m-menu__section--first">
								<h4 class="m-menu__section-text">
									Property Configurations
								</h4>
								<i class="m-menu__section-icon flaticon-more-v3"></i>
							</li>
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">
                                    Property Setup
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__link-text">
                                                Property Setup
												</span>
											</span>
										</li>
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/PropertyDetails" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Property Details
												</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/wings" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Wings
												</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/floors" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Floors
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/room-types" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Room Types
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/room-owners" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Room Owner
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/Rooms" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Rooms
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/rate-types" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Rate Types
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/Rates" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Rates
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/Seasons" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Seasons
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/week-days" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Week Days
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/amenity-types" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Amenity Type
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/Amenities" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Amenities
												</span>
											</a>
                                        </li>
                                   
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/NonRentalUnits" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
                                                Non Rental Units
												</span>
											</a>
                                        </li>
                                     


									</ul>
								</div>
							</li>
					
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">
									Main Configuration
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"  m-menu-link-redirect="1">
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													
												</span>
											</span>
										</li>
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/Taxes" class="m-menu__link ">
												<span class="m-menu__link-text">
												Tax Setup
												</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/ExchangeRates" class="m-menu__link ">
												<span class="m-menu__link-text">
													Exchange Rate
												</span>
											</a>
										</li>
										
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/SettlementTypes" class="m-menu__link ">
												<span class="m-menu__link-text">
													Settlement Type
												</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/card-type-prefixes" class="m-menu__link ">
												<span class="m-menu__link-text">
												Card Type Prefix
												</span>
											</a>
										</li>
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/hotel-representatives" class="m-menu__link ">
												<span class="m-menu__link-text">
												Hotel Representatives
												</span>
											</a>
                                        </li>
										
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/AccountTypes" class="m-menu__link ">
												<span class="m-menu__link-text">
													Account Type
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/Accounts" class="m-menu__link ">
												<span class="m-menu__link-text">
													Accounts
												</span>
											</a>
                                        </li>
									
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/business-source-types" class="m-menu__link ">
												<span class="m-menu__link-text">
												Business Source Type
												</span>
											</a>
                                        </li>

                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/BusinessSources" class="m-menu__link ">
												<span class="m-menu__link-text">
													Business Source
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/ExtraChargeCategories" class="m-menu__link ">
												<span class="m-menu__link-text">
													Extra Charge Category
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/ExtraCharges" class="m-menu__link ">
												<span class="m-menu__link-text">
													Extra Charge
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/MealPlans" class="m-menu__link ">
												<span class="m-menu__link-text">
													Meal Plan
												</span>
											</a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/RevenueBreakdowns" class="m-menu__link ">
												<span class="m-menu__link-text">
													Revenue Breakdown
												</span>
											</a>
										</li>
									</ul>
								</div>
                            </li>
                       
                 
                            

                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover" m-menu-link-redirect="1">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">
										Advance Settings
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
									
									
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/EmailAccounts" class="m-menu__link ">
												<span class="m-menu__link-text">
													Email Accounts
												</span>
											</a>
                                        </li>
                                     
                                   
                                        <li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/Notices" class="m-menu__link ">
												<span class="m-menu__link-text">
													Notice
												</span>
											</a>
                                        </li>
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/Identities" class="m-menu__link ">
												<span class="m-menu__link-text">
													Identities
												</span>
											</a>
                                        </li>
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/DnrLists" class="m-menu__link ">
												<span class="m-menu__link-text">
													DNR Reason
												</span>
											</a>
										</li>
										
										<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
											<a  href="/FollowUpTypes" class="m-menu__link ">
												<span class="m-menu__link-text">
													Followup Type
												</span>
											</a>
										</li>
									
                                     
                                     
                               
                                      
									</ul>
								</div>
							</li>
							
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">
									Tools
								</h4>
								<i class="m-menu__section-icon flaticon-more-v3"></i>
							</li>
						
							<li class="m-menu__item " aria-haspopup="true"  m-menu-link-redirect="1">
								<a  href="Users/logout" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot">
										<span></span>
									</i>
									<span class="m-menu__link-text">
										Logout
									</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
				<?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>

				</div>
				<!--
			</div>
			-->
		</div>
		<!-- end::Body -->
<!-- begin::Footer -->
		<footer class="m-grid__item m-footer ">
			<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
				<div class="m-footer__wrapper">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2018 &copy; Hotel Manager by
								<a href="" class="m-link">
									ITandT Solution Limited.
								</a>
							</span>
						</div>
					
					</div>
				</div>
			</div>
		</footer>
		<!-- end::Footer -->
	</div>
	<!-- end:: Page -->
    	            <!-- begin::Quick Sidebar -->

	<!-- end::Quick Sidebar -->	        
	    <!-- begin::Scroll Top -->
	<div id="m_scroll_top" class="m-scroll-top">
		<i class="la la-arrow-up"></i>
	</div>
    
    
    
    <?= $this->Html->script('../assets/vendors/base/vendors.bundle.js') ?>
    <?= $this->Html->script('../assets/demo/demo2/base/scripts.bundle.js') ?>
    <?= $this->Html->script('../assets/app/js/dashboard.js') ?>
    <?= $this->Html->script('../assets/vendors/custom/datatables/datatables.bundle.js') ?>
    <?= $this->Html->script('../assets/demo/default/custom/crud/datatables/basic/basic.js') ?>

  
</body>
<!-- end::Body -->
</html>
