<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TaxSetting $taxSetting
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $taxSetting->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $taxSetting->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tax Settings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tax Setting Types'), ['controller' => 'TaxSettingTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tax Setting Type'), ['controller' => 'TaxSettingTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="taxSettings form large-9 medium-8 columns content">
    <?= $this->Form->create($taxSetting) ?>
    <fieldset>
        <legend><?= __('Edit Tax Setting') ?></legend>
        <?php
            echo $this->Form->control('tax_setting_type_id', ['options' => $taxSettingTypes]);
            echo $this->Form->control('amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
