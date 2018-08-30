<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Remark $remark
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Remarks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Remark Categories'), ['controller' => 'RemarkCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Remark Category'), ['controller' => 'RemarkCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="remarks form large-9 medium-8 columns content">
    <?= $this->Form->create($remark) ?>
    <fieldset>
        <legend><?= __('Add Remark') ?></legend>
        <?php
            echo $this->Form->control('remark_category_id', ['options' => $remarkCategories]);
            echo $this->Form->control('alias');
            echo $this->Form->control('sort_key');
            echo $this->Form->control('reason');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
