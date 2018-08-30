<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomsAmenity $roomsAmenity
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rooms Amenities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Amenities'), ['controller' => 'Amenities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Amenity'), ['controller' => 'Amenities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomsAmenities form large-9 medium-8 columns content">
    <?= $this->Form->create($roomsAmenity) ?>
    <fieldset>
        <legend><?= __('Add Rooms Amenity') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
