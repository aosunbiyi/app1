<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DnrList $dnrList
 */
?>


  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title m-subheader__title--separator">
                                Dnr List Detail View
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
										<a href="/dnr-lists" class="m-nav__link">
											<span class="m-nav__link-text">
                                            Dnr List
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
                                                                <a href="/dnr-lists" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Dnr Lists
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/dnr-lists/edit/<?php echo $dnrList->id ?>" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    Edit Dnr List
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/dnr-lists/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Dnr Lists
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
                                                    <?= h($dnrList->dnr_name) ?>
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">

    
    <table class="table  table-striped">
     
    <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($dnrList->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dnr Name') ?></th>
            <td><?= h($dnrList->dnr_name) ?></td>
        </tr>
   
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dnrList->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($dnrList->modified) ?></td>
        </tr>

        <tr>
            <th>
            <h4><?= __('Description') ?></h4>
            </th>
            <td>
            <?= $this->Text->autoParagraph(h($dnrList->description)); ?>
            </td>
        </tr>
    </table>

    

                                    
                                    </div>
                                </div>
                                
<br>





