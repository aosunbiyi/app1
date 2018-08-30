<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomsWeekDay $roomsWeekDay
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rooms Week Day'), ['action' => 'edit', $roomsWeekDay->room_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rooms Week Day'), ['action' => 'delete', $roomsWeekDay->room_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomsWeekDay->room_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms Week Days'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rooms Week Day'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Week Days'), ['controller' => 'WeekDays', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Week Day'), ['controller' => 'WeekDays', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roomsWeekDays view large-9 medium-8 columns content">
    <h3><?= h($roomsWeekDay->room_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Room') ?></th>
            <td><?= $roomsWeekDay->has('room') ? $this->Html->link($roomsWeekDay->room->id, ['controller' => 'Rooms', 'action' => 'view', $roomsWeekDay->room->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Week Day') ?></th>
            <td><?= $roomsWeekDay->has('week_day') ? $this->Html->link($roomsWeekDay->week_day->id, ['controller' => 'WeekDays', 'action' => 'view', $roomsWeekDay->week_day->id]) : '' ?></td>
        </tr>
    </table>
</div>
