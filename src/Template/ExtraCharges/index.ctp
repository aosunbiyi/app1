<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExtraCharge[]|\Cake\Collection\CollectionInterface $extraCharges
 */
?>

  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title m-subheader__title--separator">
                                Extra Charge 
                                </h3>
                                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                    <li class="m-nav__item m-nav__item--home">
                                        <a href="/Dashboard" class="m-nav__link m-nav__link--icon">
                                            <i class="m-nav__link-icon la la-home"></i>
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
                                                                <a href="/ExtraCharges/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-plus"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Extra Charge
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/extra-charge-categories" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-menu"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Extra Charge Categories
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/extra-charge-categories/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-squares"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Extra Charge Category
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



<div class="m-portlet m-portlet--mobile">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                Extra Charges List Table
                                </h3>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                        
                                <li class="m-portlet__nav-item"></li>
                            
                            </ul>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                 
                        <table   class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
        <thead>
            <tr>
               
              
                <th scope="col"><?= $this->Paginator->sort('extra_charge_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extra_charge_category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($extraCharges as $extraCharge): ?>
            <tr>
               
               
                <td><?= h($extraCharge->extra_charge_name) ?></td>
                <td><?= $extraCharge->has('extra_charge_category') ? $this->Html->link($extraCharge->extra_charge_category->category_name, ['controller' => 'ExtraChargeCategories', 'action' => 'view', $extraCharge->extra_charge_category->id]) : '' ?></td>
                <td><?= $this->Number->format($extraCharge->rate) ?></td>
                <td><?= h($extraCharge->created) ?></td>
                <td><?= h($extraCharge->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $extraCharge->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $extraCharge->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $extraCharge->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $extraCharge->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
                 

                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->









