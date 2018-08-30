<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomTypesRate[]|\Cake\Collection\CollectionInterface $roomTypesRates
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Room Types Rate'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Room Types'), ['controller' => 'RoomTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room Type'), ['controller' => 'RoomTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rates'), ['controller' => 'Rates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rate'), ['controller' => 'Rates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomTypesRates index large-9 medium-8 columns content">
    <h3><?= __('Room Types Rates') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('room_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rate_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roomTypesRates as $roomTypesRate): ?>
            <tr>
                <td><?= $roomTypesRate->has('room_type') ? $this->Html->link($roomTypesRate->room_type->id, ['controller' => 'RoomTypes', 'action' => 'view', $roomTypesRate->room_type->id]) : '' ?></td>
                <td><?= $roomTypesRate->has('rate') ? $this->Html->link($roomTypesRate->rate->id, ['controller' => 'Rates', 'action' => 'view', $roomTypesRate->rate->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $roomTypesRate->room_type_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roomTypesRate->room_type_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roomTypesRate->room_type_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomTypesRate->room_type_id)]) ?>
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
