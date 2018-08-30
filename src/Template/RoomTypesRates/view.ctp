<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomTypesRate $roomTypesRate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room Types Rate'), ['action' => 'edit', $roomTypesRate->room_type_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room Types Rate'), ['action' => 'delete', $roomTypesRate->room_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomTypesRate->room_type_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Room Types Rates'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room Types Rate'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Room Types'), ['controller' => 'RoomTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room Type'), ['controller' => 'RoomTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rates'), ['controller' => 'Rates', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rate'), ['controller' => 'Rates', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roomTypesRates view large-9 medium-8 columns content">
    <h3><?= h($roomTypesRate->room_type_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Room Type') ?></th>
            <td><?= $roomTypesRate->has('room_type') ? $this->Html->link($roomTypesRate->room_type->id, ['controller' => 'RoomTypes', 'action' => 'view', $roomTypesRate->room_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rate') ?></th>
            <td><?= $roomTypesRate->has('rate') ? $this->Html->link($roomTypesRate->rate->id, ['controller' => 'Rates', 'action' => 'view', $roomTypesRate->rate->id]) : '' ?></td>
        </tr>
    </table>
</div>
