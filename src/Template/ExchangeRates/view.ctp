<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ExchangeRate $exchangeRate
 */
?>


	<!-- BEGIN: Subheader -->
    <div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
                                Exchange Rate - Details View
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
										<a href="/exchange-rates" class="m-nav__link">
											<span class="m-nav__link-text">
                                            Exchange Rate
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
                                                                <a href="/exchange-rates/edit/<?php echo $exchangeRate->id ?>" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-edit-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    Edit Exchange Rate
                                                                    </span>
                                                                </a>
                                                            </li>
                                                                                                                     
                                                            <li class="m-nav__item">
                                                                <a href="/exchange-rates" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-menu-button"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Exchange Rates
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/exchange-rates/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-medical"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Exchange Rate
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
                                                    <?= h($exchangeRate->currency_name) ?>
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">

    <table class="table table-stripped">
  
  
        <tr>
            <th scope="row"><?= __('Currency Symbol') ?></th>
            <td><?= h($exchangeRate->currency_symbol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Symbol Placement') ?></th>
            <td><?= h($exchangeRate->symbol_placement) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country Name') ?></th>
            <td><?= h($exchangeRate->country_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Base Currency') ?></th>
            <td><?= $this->Number->format($exchangeRate->is_base_currency) ?></td>
        </tr> 
  
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($exchangeRate->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Decimal Place') ?></th>
            <td><?= $this->Number->format($exchangeRate->decimal_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exchange Rate') ?></th>
            <td><?= $this->Number->format($exchangeRate->exchange_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($exchangeRate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($exchangeRate->modified) ?></td>
        </tr>
    </table>
  
    <br>

    
                                    
                                    </div>
                                </div>
                                
<br>





