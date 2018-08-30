<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Propertysetup $propertysetup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Propertysetup'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="propertysetup form large-9 medium-8 columns content">
    <?= $this->Form->create($propertysetup) ?>
    <fieldset>
        <legend><?= __('Add Propertysetup') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
