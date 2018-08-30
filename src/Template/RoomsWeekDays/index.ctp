<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomsWeekDay[]|\Cake\Collection\CollectionInterface $roomsWeekDays
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rooms Week Day'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Week Days'), ['controller' => 'WeekDays', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Week Day'), ['controller' => 'WeekDays', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomsWeekDays index large-9 medium-8 columns content">
    <h3><?= __('Rooms Week Days') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('room_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('week_day_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roomsWeekDays as $roomsWeekDay): ?>
            <tr>
                <td><?= $roomsWeekDay->has('room') ? $this->Html->link($roomsWeekDay->room->id, ['controller' => 'Rooms', 'action' => 'view', $roomsWeekDay->room->id]) : '' ?></td>
                <td><?= $roomsWeekDay->has('week_day') ? $this->Html->link($roomsWeekDay->week_day->id, ['controller' => 'WeekDays', 'action' => 'view', $roomsWeekDay->week_day->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $roomsWeekDay->room_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roomsWeekDay->room_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roomsWeekDay->room_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomsWeekDay->room_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
