<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>

  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title m-subheader__title--separator">
                                  New  Account
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
										<a href="/accounts" class="m-nav__link">
											<span class="m-nav__link-text">
												Accounts
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
                                                                <a href="/accounts" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Accounts
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/account-types" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-list-3"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Account Types
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/account-types/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-plus"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Account Type
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/hotel-representatives" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-interface-8"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Hotel Representatives
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/hotel-representatives/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-avatar"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Hotel Representative
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
                                            Add Account
											</h3>
										</div>
									</div>
								</div>
                                <!--begin::Form-->
                             
                                <?= $this->Form->create($account,['class'=>'m-form m-form--fit m-form--label-align-right']) ?>
								
									<div class="m-portlet__body">
										<div class="form-group m-form__group">
										
                                            
          


                <?php

echo $this->Form->control('account_type_id',['class'=>'form-control m-input m-input--square'], ['options' => $accountTypes]);
echo $this->Form->control('hotel_representative_id',['class'=>'form-control m-input m-input--square'], ['options' => $hotelRepresentatives, 'empty' => true]);
echo $this->Form->control('alias',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('last_name',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('first_name',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('account_number',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('credit_limit',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('opening_balance',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('payment_term',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('address1',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('address2',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('city',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('postal_code',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('state',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('country',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('phone',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('fax',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('email',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('credit_card_type',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('card_holder',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('card_number',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('exp_date', ['empty' => true]);
echo $this->Form->control('reg_number',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('reg_number1',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('reg_number2',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('created_on', ['empty' => true]);
echo $this->Form->control('created_by',['class'=>'form-control m-input m-input--square']);
echo $this->Form->control('remark',['class'=>'form-control m-input m-input--square']);

                ?>

          
                                                    </div>
                                    
                                        
									</div>
									<div class="m-portlet__foot m-portlet__foot--fit">
										<div class="m-form__actions">
                                        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-metal']) ?>
         
                                        
										</div>
                                    </div>
                                    <?= $this->Form->end() ?>

						
								<!--end::Form-->
							</div>
                            <!--end::Portlet-->
                            


