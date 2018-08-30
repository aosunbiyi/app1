<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomImage $roomImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room Image'), ['action' => 'edit', $roomImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room Image'), ['action' => 'delete', $roomImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Room Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roomImages view large-9 medium-8 columns content">
    <h3><?= h($roomImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Room') ?></th>
            <td><?= $roomImage->has('room') ? $this->Html->link($roomImage->room->id, ['controller' => 'Rooms', 'action' => 'view', $roomImage->room->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image Url') ?></th>
            <td><?= h($roomImage->image_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($roomImage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($roomImage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($roomImage->modified) ?></td>
        </tr>
    </table>
</div>
