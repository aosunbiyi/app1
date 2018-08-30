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
                                 Account - Details View
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
                                                                <a href="/accounts/edit/<?php echo $account->id ?>" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-edit-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    Edit Account
                                                                    </span>
                                                                </a>
                                                            </li>
                                                                                                                     
                                                            <li class="m-nav__item">
                                                                <a href="/accounts" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-menu-button"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Accounts
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/accounts/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-medical"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Account
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/account-types" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-pie-chart"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Account Types
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/account-types/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-list-3"></i>
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





<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="flaticon-statistics"></i>
												</span>
												
												<h2 class="m-portlet__head-label m-portlet__head-label--warning">
													<span>
                                                   Account  <?= h($account->account_number) ?>
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">

    <table class="table table-stripped">
    <tr>
            <th scope="row"><?= __('Account Type') ?></th>
            <td><?= $account->has('account_type') ? $this->Html->link($account->account_type->account_type_name, ['controller' => 'AccountTypes', 'action' => 'view', $account->account_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotel Representative') ?></th>
            <td><?= $account->has('hotel_representative') ? $this->Html->link($account->hotel_representative->hotel_representative_name, ['controller' => 'HotelRepresentatives', 'action' => 'view', $account->hotel_representative->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($account->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($account->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($account->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account Number') ?></th>
            <td><?= h($account->account_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address1') ?></th>
            <td><?= h($account->address1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address2') ?></th>
            <td><?= h($account->address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($account->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postal Code') ?></th>
            <td><?= h($account->postal_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($account->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($account->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($account->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($account->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($account->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credit Card Type') ?></th>
            <td><?= h($account->credit_card_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Card Holder') ?></th>
            <td><?= h($account->card_holder) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Card Number') ?></th>
            <td><?= h($account->card_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reg Number') ?></th>
            <td><?= h($account->reg_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reg Number1') ?></th>
            <td><?= h($account->reg_number1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reg Number2') ?></th>
            <td><?= h($account->reg_number2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= h($account->created_by) ?></td>
        </tr>
       
        <tr>
            <th scope="row"><?= __('Credit Limit') ?></th>
            <td><?= $this->Number->format($account->credit_limit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Opening Balance') ?></th>
            <td><?= $this->Number->format($account->opening_balance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Term') ?></th>
            <td><?= $this->Number->format($account->payment_term) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exp Date') ?></th>
            <td><?= h($account->exp_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created On') ?></th>
            <td><?= h($account->created_on) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($account->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($account->modified) ?></td>
        </tr>
        <tr>
            <th scope="row">  <h4><?= __('Remark') ?></h4> </th>
            <td>
            <?= $this->Text->autoParagraph(h($account->remark)); ?>
            </td>
        </tr>
    </table>
  
    <br>

    
                                    
                                    </div>
                                </div>
                                
<br>







