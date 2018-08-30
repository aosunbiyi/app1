<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomsAmenity $roomsAmenity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rooms Amenity'), ['action' => 'edit', $roomsAmenity->room_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rooms Amenity'), ['action' => 'delete', $roomsAmenity->room_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomsAmenity->room_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms Amenities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rooms Amenity'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Amenities'), ['controller' => 'Amenities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Amenity'), ['controller' => 'Amenities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roomsAmenities view large-9 medium-8 columns content">
    <h3><?= h($roomsAmenity->room_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Room') ?></th>
            <td><?= $roomsAmenity->has('room') ? $this->Html->link($roomsAmenity->room->id, ['controller' => 'Rooms', 'action' => 'view', $roomsAmenity->room->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amenity') ?></th>
            <td><?= $roomsAmenity->has('amenity') ? $this->Html->link($roomsAmenity->amenity->id, ['controller' => 'Amenities', 'action' => 'view', $roomsAmenity->amenity->id]) : '' ?></td>
        </tr>
    </table>
</div>
