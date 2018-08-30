
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SettlementType $settlementType
 */
?>


	<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
                                Settlement Type - Details View
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
										<a href="/settlement-types" class="m-nav__link">
											<span class="m-nav__link-text">
                                             Settlement Types
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
                                                                <a href="/settlement-types/edit/<?php echo $settlementType->id ?>" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-edit-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    Edit Settlement Type
                                                                    </span>
                                                                </a>
                                                            </li>
                                                                                                                     
                                                            <li class="m-nav__item">
                                                                <a href="/settlement-types" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-menu-button"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Settlement Types
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/settlement-types/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-medical"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Settlement Type
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/card-type-prefixes" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-pie-chart"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Card Type Prefixes
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/card-type-prefixes/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-list-3"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Card Type Prefix
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
                                                    <?= h($settlementType->settlement_name) ?>
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">

    <table class="table table-stripped">
   
   
  
  
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($settlementType->alias) ?></td>
        </tr>
		<tr>
            <th scope="row"><?= __('Prefix') ?></th>
            <td><?= h($settlementType->prefix) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Suffix') ?></th>
            <td><?= h($settlementType->suffix) ?></td>
        </tr>
		
		 <tr>
            <th scope="row"><?= __('Can Generate Receipt') ?></th>
            <td><?= $this->Number->format($settlementType->can_generate_receipt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Index') ?></th>
            <td><?= $this->Number->format($settlementType->start_index) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Index') ?></th>
            <td><?= $this->Number->format($settlementType->current_index) ?></td>
        </tr>
		
        <tr>
            <th scope="row"><?= __('Payment Option') ?></th>
            <td><?= h($settlementType->payment_option) ?></td>
        </tr>
     
     
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($settlementType->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($settlementType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($settlementType->modified) ?></td>
        </tr>

    </table>
  
    <br>

    
                                    
                                    </div>
                                </div>
                                
<br>





<div class="m-portlet m-portlet--creative m-portlet--first m-portlet--bordered-semi">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="flaticon-statistics"></i>
												</span>
											
												<h2 class="m-portlet__head-label m-portlet__head-label--danger">
													<span>
                                                    Related Card Type Prefixes
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">


       
       <?php if (!empty($settlementType->card_type_prefixes)): ?>
        <table   class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
            <tr>
        
                <th scope="col"><?= __('Prefix') ?></th>
                <th scope="col"><?= __('Credit Card Type') ?></th>
             
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($settlementType->card_type_prefixes as $cardTypePrefixes): ?>
            <tr>
               
                <td><?= h($cardTypePrefixes->prefix) ?></td>
                <td><?= h($cardTypePrefixes->credit_card_type) ?></td>
               
                <td><?= h($cardTypePrefixes->created) ?></td>
                <td><?= h($cardTypePrefixes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CardTypePrefixes', 'action' => 'view', $cardTypePrefixes->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CardTypePrefixes', 'action' => 'edit', $cardTypePrefixes->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CardTypePrefixes', 'action' => 'delete', $cardTypePrefixes->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $cardTypePrefixes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
                                        


                                

</div>
</div>


