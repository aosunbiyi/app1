<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>



  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <h3 class="m-subheader__title m-subheader__title--separator">
                                  Rooms Detail View
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
										<a href="/rooms" class="m-nav__link">
											<span class="m-nav__link-text">
												Rooms
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
                                                                <a href="/rooms" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Rooms
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/room-images/add/<?php echo $room->id ?>" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    Upload Room Images
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/room-types" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-list-3"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Room Types
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/room-types/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-plus"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Room Type
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/wings" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-menu"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Wings
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/wings/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon fa fa-building-o"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Wing
                                                                    </span>
                                                                </a>
                                                            </li>

                                                                 <li class="m-nav__item">
                                                                <a href="/room-owners" class="m-nav__link">
                                                                    <i class="m-nav__link-icon fa fa-server"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Room Owners
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/room-owners/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon fa fa-user-plus"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Room Owner
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/amenities" class="m-nav__link">
                                                                    <i class="m-nav__link-icon fa fa-th-list"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Amenities
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/amenities/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Amenity
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/week-days/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-background"></i>
                                                                    <span class="m-nav__link-text">
                                                                    List Week Days
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__item">
                                                                <a href="/week-days/add" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-computer"></i>
                                                                    <span class="m-nav__link-text">
                                                                    New Week Day
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
                                                    <?= h($room->room_name) ?>
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">

    
    <table class="table  table-striped">
        <tr>
            <th scope="row"><?= __('Room Type') ?></th>
            <td><?= $room->has('room_type') ? $this->Html->link($room->room_type->room_type_name, ['controller' => 'RoomTypes', 'action' => 'view', $room->room_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Floor') ?></th>
            <td><?= $room->has('floor') ? $this->Html->link($room->floor->floor_name, ['controller' => 'Floors', 'action' => 'view', $room->floor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($room->alias) ?></td>
        </tr>
     
        <tr>
            <th scope="row"><?= __('Room Owner') ?></th>
            <td><?= $room->has('room_owner') ? $this->Html->link($room->room_owner->first_name.' '.$room->room_owner->last_name, ['controller' => 'RoomOwners', 'action' => 'view', $room->room_owner->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Extension') ?></th>
            <td><?= h($room->phone_extension) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Extension') ?></th>
            <td><?= h($room->data_extension) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Keycard Alias') ?></th>
            <td><?= h($room->keycard_alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Power Code') ?></th>
            <td><?= h($room->power_code) ?></td>
        </tr>
    
        
        <tr>
            <th scope="row"><?= __('Sort Key') ?></th>
            <td><?= $this->Number->format($room->sort_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inactive') ?></th>
            <td><?= $this->Number->format($room->inactive) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>

        <tr>
            <th>
            <h4><?= __('Remark') ?></h4>
            </th>
            <td>
            <?= $this->Text->autoParagraph(h($room->remark)); ?>
            </td>
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
                                                    Related Amenities
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">
                                        
                                    <?php if (!empty($room->amenities)): ?>
        <table  class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
            <tr>
            <th scope="col"><?= __('Amenity Name') ?></th>
                <th scope="col"><?= __('Amenity Type') ?></th>
              
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($room->amenities as $amenities): ?>
            <tr>
            
            <td><?= h($amenities->amenity_name) ?></td>
                <td><?= h($amenities->amenity_type->amenity_type_name) ?></td>
                
             
                <td><?= h($amenities->created) ?></td>
                <td><?= h($amenities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Amenities', 'action' => 'view', $amenities->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Amenities', 'action' => 'edit', $amenities->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Amenities', 'action' => 'delete', $amenities->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $amenities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
                                
                                    
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
											
												<h2 class="m-portlet__head-label m-portlet__head-label--success">
													<span>
                                                    Cleaning Days
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">
                                        
                                    <?php if (!empty($room->week_days)): ?>
        <table   class="table table-striped- table-bordered table-hover table-checkable" >
            <tr>
                
                <th scope="col"><?= __('Day Name') ?></th>
                <th scope="col"><?= __('Isweekday') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($room->week_days as $weekDays): ?>
            <tr>
            
                <td><?= h($weekDays->day_name) ?></td>
                <td><?= h($weekDays->isweekday) ?></td>
                <td><?= h($weekDays->created) ?></td>
                <td><?= h($weekDays->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WeekDays', 'action' => 'view', $weekDays->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WeekDays', 'action' => 'edit', $weekDays->id],['class'=>'btn btn-success btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WeekDays', 'action' => 'delete', $weekDays->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $weekDays->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
                                
                                    
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
											
												<h2 class="m-portlet__head-label m-portlet__head-label--info">
													<span>
                                                   Room Photos
													</span>
												</h2>
											</div>
										</div>
									
									</div>
									<div class="m-portlet__body">
                                        
         
                                    <?php if (!empty($room->room_images)): ?>
        <table   class="table table-striped- table-bordered table-hover table-checkable">
            <tr>
                
            
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($room->room_images as $roomImages): ?>
            <tr>
               
              
                <td>   
                    <img src="<?= h('/files/' .$roomImages->image_url) ?>" style="width:300px; ">
                
            
            </td>
             
                <td class="actions">

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RoomImages', 'action' => 'delete', $roomImages->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $roomImages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
                                
                                    
                                    </div>
                                    </div>




