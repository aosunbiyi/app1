<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomsAmenity[]|\Cake\Collection\CollectionInterface $roomsAmenities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rooms Amenity'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Amenities'), ['controller' => 'Amenities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Amenity'), ['controller' => 'Amenities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomsAmenities index large-9 medium-8 columns content">
    <h3><?= __('Rooms Amenities') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('room_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amenity_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roomsAmenities as $roomsAmenity): ?>
            <tr>
                <td><?= $roomsAmenity->has('room') ? $this->Html->link($roomsAmenity->room->id, ['controller' => 'Rooms', 'action' => 'view', $roomsAmenity->room->id]) : '' ?></td>
                <td><?= $roomsAmenity->has('amenity') ? $this->Html->link($roomsAmenity->amenity->id, ['controller' => 'Amenities', 'action' => 'view', $roomsAmenity->amenity->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $roomsAmenity->room_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roomsAmenity->room_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roomsAmenity->room_id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomsAmenity->room_id)]) ?>
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
