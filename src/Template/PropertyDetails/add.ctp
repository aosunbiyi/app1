<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PropertyDetail $propertyDetail
 */
?>


	<!--begin::Portlet-->
    <div class="m-portlet m-portlet--tab">
								<div class="m-portlet__head">
									<div class="m-portlet__head-caption">
										<div class="m-portlet__head-title">
											<span class="m-portlet__head-icon m--hide">
												<i class="la la-gear"></i>
											</span>
											<h3 class="m-portlet__head-text">
                                            Add Property Detail
											</h3>
										</div>
									</div>
								</div>
        <!--begin::Form-->
                <?= $this->Form->create($propertyDetail,['type' => 'file','class'=>'m-form m-form--fit m-form--label-align-right']) ?>
                
                    <div class="m-portlet__body">
                        <div class="form-group m-form__group">
										
                                            
          


                <?php
                echo $this->Form->control('property_name',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('beneficiary_name',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('property_type',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('property_grade',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('registration_number',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('file',['type' => 'file','class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('address1',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('address2',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('city',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('state',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('country',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('phone',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('fax',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('res_phone',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('email',['class'=>'form-control m-input m-input--square']);
                echo $this->Form->control('website',['class'=>'form-control m-input m-input--square']);
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
                            


