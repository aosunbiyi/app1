<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rate $rate
 */
?>


	<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
                                 Rate- Details View
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
										<a href="/rates" class="m-nav__link">
											<span class="m-nav__link-text">
												Rates
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
                                                                <a href="/rates/edit/<?php echo $rate->id ?>" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-edit-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    Edit Rate
                                                                    </span>
                                                                </a>
                                                            </li>
                                                                                                                     
                                                            <li class="m-nav__item">
                                                                <a href="/rates" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-menu-button"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Rates
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/rates/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-medical"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Rate
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/rate-types" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-pie-chart"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Rate Types
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/rate-types/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-list-3"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Rate Type
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/room-types" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-clipboard"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Room Types
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/room-types/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-add"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Room Type
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
                                                    <?= h($rate->rate_name) ?>
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">

                                           <table class="table table-stripped">
   
                                           
                                           <tr>
            <th scope="row"><?= __('Rate Type') ?></th>
            <td><?= $rate->has('rate_type') ? $this->Html->link($rate->rate_type->rate_type_name, ['controller' => 'RateTypes', 'action' => 'view', $rate->rate_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rate Name') ?></th>
            <td><?= h($rate->rate_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($rate->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isweekday') ?></th>
            <td><?= $this->Number->format($rate->isweekday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isspecial') ?></th>
            <td><?= $this->Number->format($rate->isspecial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isactive') ?></th>
            <td><?= $this->Number->format($rate->isactive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extra Adult') ?></th>
            <td><?= $this->Number->format($rate->extra_adult) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extra Child') ?></th>
            <td><?= $this->Number->format($rate->extra_child) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($rate->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Date') ?></th>
            <td><?= h($rate->end_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rate->modified) ?></td>
        </tr>


    </table>
                                    
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
                                                    Related Room Types
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">
                                        

  
  <?php if (!empty($rate->room_types)): ?>
        <table  class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
            <tr>
                
                <th scope="col"><?= __('Room Type Name') ?></th>
              
           
                <th scope="col"><?= __('Back Color') ?></th>
             
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($rate->room_types as $roomTypes): ?>
            <tr>
               
                <td><?= h($roomTypes->room_type_name) ?></td>
              
               
                <td>
                <div style=" width:40px; height:40px; background:<?= h($roomTypes->back_color) ?>"></div>    
               </td>
            
                <td><?= h($roomTypes->created) ?></td>
                <td><?= h($roomTypes->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RoomTypes', 'action' => 'view', $roomTypes->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RoomTypes', 'action' => 'edit', $roomTypes->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RoomTypes', 'action' => 'delete', $roomTypes->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $roomTypes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
                                
                                    
                                    </div>
                                    </div>

<br>

