<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PropertyDetail $propertyDetail
 */
?>



  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title m-subheader__title--separator">
                                Property Details View
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
										<a href="/property-details" class="m-nav__link">
											<span class="m-nav__link-text">
												Property Details
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
                                                                <a href="/property-details" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Property Details
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/property-details/edit/<?php echo $propertyDetail->id ?>" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    Edit Property Detail
                                                                    </span>
                                                                </a>
                                                            </li>
                                                         
                                                            <li class="m-nav__item">
                                                                <a href="/property-details/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-plus"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Property Detail
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




	<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="flaticon-statistics"></i>
												</span>
												
												<h2 class="m-portlet__head-label m-portlet__head-label--warning">
													<span>
													<?= h($propertyDetail->property_name) ?>
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">

                                     <table class="table table-stripped">
       
       <tr>
           <th scope="row" style='width:30%;'><?= __('Beneficiary Name') ?></th>
           <td><?= h($propertyDetail->beneficiary_name) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Property Type') ?></th>
           <td><?= h($propertyDetail->property_type) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Property Grade') ?></th>
           <td><?= h($propertyDetail->property_grade) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Registration Number') ?></th>
           <td><?= h($propertyDetail->registration_number) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Logo') ?></th>
           <td>
           
           <img src="<?= h('/files/config/' .$propertyDetail->logo) ?>" style="width:300px; ">
         
           
           </td>
       </tr>
       <tr>
           <th scope="row"><?= __('Address1') ?></th>
           <td><?= h($propertyDetail->address1) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Address2') ?></th>
           <td><?= h($propertyDetail->address2) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('City') ?></th>
           <td><?= h($propertyDetail->city) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('State') ?></th>
           <td><?= h($propertyDetail->state) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Country') ?></th>
           <td><?= h($propertyDetail->country) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Phone') ?></th>
           <td><?= h($propertyDetail->phone) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Fax') ?></th>
           <td><?= h($propertyDetail->fax) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Res Phone') ?></th>
           <td><?= h($propertyDetail->res_phone) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Email') ?></th>
           <td><?= h($propertyDetail->email) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Website') ?></th>
           <td><?= h($propertyDetail->website) ?></td>
       </tr>
    
       <tr>
           <th scope="row"><?= __('Created') ?></th>
           <td><?= h($propertyDetail->created) ?></td>
       </tr>
       <tr>
           <th scope="row"><?= __('Modified') ?></th>
           <td><?= h($propertyDetail->modified) ?></td>
       </tr>
   </table>
                                    
                                    </div>
                                </div>
                                




