<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomsWeekDay $roomsWeekDay
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roomsWeekDay->room_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roomsWeekDay->room_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Rooms Week Days'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Week Days'), ['controller' => 'WeekDays', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Week Day'), ['controller' => 'WeekDays', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomsWeekDays form large-9 medium-8 columns content">
    <?= $this->Form->create($roomsWeekDay) ?>
    <fieldset>
        <legend><?= __('Edit Rooms Week Day') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
