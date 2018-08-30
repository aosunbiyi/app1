<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Miscellaneous $miscellaneous
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Miscellaneous'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="miscellaneous form large-9 medium-8 columns content">
    <?= $this->Form->create($miscellaneous) ?>
    <fieldset>
        <legend><?= __('Add Miscellaneous') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
