<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RemarkCategory $remarkCategory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Remark Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Remarks'), ['controller' => 'Remarks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Remark'), ['controller' => 'Remarks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="remarkCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($remarkCategory) ?>
    <fieldset>
        <legend><?= __('Add Remark Category') ?></legend>
        <?php
            echo $this->Form->control('alias');
            echo $this->Form->control('sort_key');
            echo $this->Form->control('category_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
