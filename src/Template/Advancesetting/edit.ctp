<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Advancesetting $advancesetting
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $advancesetting->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $advancesetting->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Advancesetting'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="advancesetting form large-9 medium-8 columns content">
    <?= $this->Form->create($advancesetting) ?>
    <fieldset>
        <legend><?= __('Edit Advancesetting') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
