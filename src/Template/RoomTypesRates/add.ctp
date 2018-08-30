<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomTypesRate $roomTypesRate
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Room Types Rates'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Room Types'), ['controller' => 'RoomTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room Type'), ['controller' => 'RoomTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rates'), ['controller' => 'Rates', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rate'), ['controller' => 'Rates', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomTypesRates form large-9 medium-8 columns content">
    <?= $this->Form->create($roomTypesRate) ?>
    <fieldset>
        <legend><?= __('Add Room Types Rate') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
