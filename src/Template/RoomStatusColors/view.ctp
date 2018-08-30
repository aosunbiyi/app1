<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomStatusColor $roomStatusColor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room Status Color'), ['action' => 'edit', $roomStatusColor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room Status Color'), ['action' => 'delete', $roomStatusColor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomStatusColor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Room Status Colors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room Status Color'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roomStatusColors view large-9 medium-8 columns content">
    <h3><?= h($roomStatusColor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status Type') ?></th>
            <td><?= h($roomStatusColor->status_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status Name') ?></th>
            <td><?= h($roomStatusColor->status_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color Name') ?></th>
            <td><?= h($roomStatusColor->color_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($roomStatusColor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($roomStatusColor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($roomStatusColor->modified) ?></td>
        </tr>
    </table>
</div>
