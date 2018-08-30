<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomStatusColor $roomStatusColor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Room Status Colors'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="roomStatusColors form large-9 medium-8 columns content">
    <?= $this->Form->create($roomStatusColor) ?>
    <fieldset>
        <legend><?= __('Add Room Status Color') ?></legend>
        <?php
            echo $this->Form->control('status_type');
            echo $this->Form->control('status_name');
            echo $this->Form->control('color_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
