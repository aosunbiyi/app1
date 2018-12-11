<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LaundryItem $laundryItem
 */
?>

	<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
                                 Laundry Items  - Details View
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
										<a href="/laundry-items" class="m-nav__link">
											<span class="m-nav__link-text">
                                            Laundry Items
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
                                                                <a href="/laundry-items/edit/<?php echo $laundryItem->id ?>" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-edit-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    Edit Laundry Item
                                                                    </span>
                                                                </a>
                                                            </li>
                                                                                                                     
                                                            <li class="m-nav__item">
                                                                <a href="/laundry-items" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-menu-button"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Laundry Items
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/laundry-items/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-medical"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Laundry Item
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
													<?= h($laundryItem->item_name) ?>
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">



   <table class="table table-stripped">
        <tr>
            <th scope="row"><?= __('Item Name') ?></th>
            <td><?= h($laundryItem->item_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($laundryItem->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Type') ?></th>
            <td><?= h($laundryItem->item_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($laundryItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Laundry Item Category Id') ?></th>
            <td><?= $this->Number->format($laundryItem->laundry_item_category_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Charges') ?></th>
            <td><?= $this->Number->format($laundryItem->charges) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($laundryItem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($laundryItem->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4> <br>
        <?= $this->Text->autoParagraph(h($laundryItem->description)); ?>
    </div>
    <br>
    <div class="related">
        <h4><?= __('Related Laundry Services') ?></h4>
        <?php if (!empty($laundryItem->laundry_services)): ?>
        <table   class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
        <tr>
                                 
                                 
                                 <th>
                                   Service Name
                                 </th>

                                   <th>Service Image</th>
                              
                              
                                 <th>
                                     Created 
                                 </th>
                                 <th>
                                     Modified
                                 </th>
                             
                                 <th>
                                     Actions
                                 </th>
                             </tr>
            <?php foreach ($laundryItem->laundry_services as $laundryService): ?>
      

                     <tr>
                <td><?= $this->Number->format($laundryService->id) ?></td>
                <td><?= h($laundryService->service_name) ?></td>
                <td>
                <img src="<?= h('/files/' .$laundryService->service_image) ?>" style="width:80px; "> 
                </td>

                <td><?= h($laundryService->created) ?></td>
                <td><?= h($laundryService->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $laundryService->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $laundryService->id], ['class' => 'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $laundryService->id], ['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $laundryService->id)]) ?>
                </td>
            </tr>


            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
   

  
    <br>

    
                                    
                                    </div>
                                </div>
                                
<br>





