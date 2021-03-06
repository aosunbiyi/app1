<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomOwner $roomOwner
 */
?>

  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title m-subheader__title--separator">
                                  Edit  Room Owner
                                </h3>
                                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                    <li class="m-nav__item m-nav__item--home">
                                        <a href="/Dashboard" class="m-nav__link m-nav__link--icon">
                                            <i class="m-nav__link-icon la la-home"></i>
                                        </a>
                                    </li>
                                    <li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="/room-owners" class="m-nav__link">
											<span class="m-nav__link-text">
												Room Owners
											</span>
										</a>
									</li>
                                
                                </ul>
                            </div>
                            <div>
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-plus m--hide"></i>
                                        <i class="la la-ellipsis-h"></i>
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
                                                                <a href="/room-owners" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Room Owners
                                                                    </span>
                                                                </a>
                                                            </li>
                                                           
                                                            <li class="m-nav__item">
                                                                <a href="/rooms" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-menu"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Rooms
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/rooms/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-squares"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Room
                                                                    </span>
                                                                </a>
                                                            </li>



                                                            
                                                        
                                                            <li class="m-nav__section">
                                                                <span class="m-nav__section-text">
                                                                    Useful Links
                                                                </span>
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
                                                            <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                                            <li class="m-nav__item m--hide">
                                                                <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                    Submit
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                


    <br>


    
<!--begin::Portlet-->
<div class="m-portlet m-portlet--tab">
								<div class="m-portlet__head">
									<div class="m-portlet__head-caption">
										<div class="m-portlet__head-title">
											<span class="m-portlet__head-icon m--hide">
												<i class="la la-gear"></i>
											</span>
											<h3 class="m-portlet__head-text">
                                            Edit Property Detail
											</h3>
										</div>
									</div>
								</div>
                                <!--begin::Form-->
                             
                                <?= $this->Form->create($roomOwner,['class'=>'m-form m-form--fit m-form--label-align-right']) ?>
								
									<div class="m-portlet__body">
										<div class="form-group m-form__group">
										
                                            
          


                <?php
         echo $this->Form->control('first_name',['class'=>'form-control m-input m-input--square']);
         echo $this->Form->control('last_name',['class'=>'form-control m-input m-input--square']);
         echo $this->Form->label('room_plan');
         echo $this->Form->select('room_plan',['% of all Nigths'=>'% of all Nigths','% of First Night'=>'% of First Night','Fixed Amount Per Nigth'=>'Fixed Amount Per Nigth','Fixed Amount Per Stay'=>'Fixed Amount Per Stay'],['empty'=>'Select Plan','class'=>'form-control m-input m-input--square']);
         echo $this->Form->control('amount',['class'=>'form-control m-input m-input--square']);
         echo $this->Form->control('address',['class'=>'form-control m-input m-input--square']);
         echo $this->Form->control('city',['class'=>'form-control m-input m-input--square']);
         echo $this->Form->control('state',['class'=>'form-control m-input m-input--square']);
         echo $this->Form->control('country',['class'=>'form-control m-input m-input--square']);
         echo $this->Form->control('phone',['class'=>'form-control m-input m-input--square']);
         echo $this->Form->control('fax',['class'=>'form-control m-input m-input--square']);
         echo $this->Form->control('email',['class'=>'form-control m-input m-input--square']);
         echo $this->Form->control('description',['class'=>'form-control m-input m-input--square']);


                ?>

          
                                                    </div>
                                    
                                        
									</div>
									<div class="m-portlet__foot m-portlet__foot--fit">
										<div class="m-form__actions">
                                        <?= $this->Form->button(__('Update'),['class'=>'btn btn-metal']) ?>
         
                                        
										</div>
                                    </div>
                                    <?= $this->Form->end() ?>

						
								<!--end::Form-->
							</div>
                            <!--end::Portlet-->
                            


