<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomImage $roomImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roomImage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roomImage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Room Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rooms'), ['controller' => 'Rooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Room'), ['controller' => 'Rooms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roomImages form large-9 medium-8 columns content">
    <?= $this->Form->create($roomImage) ?>
    <fieldset>
        <legend><?= __('Edit Room Image') ?></legend>
        <?php
            echo $this->Form->control('room_id', ['options' => $rooms]);
            echo $this->Form->control('image_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
