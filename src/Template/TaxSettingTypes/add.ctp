<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TaxSettingType $taxSettingType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tax Setting Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tax Settings'), ['controller' => 'TaxSettings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tax Setting'), ['controller' => 'TaxSettings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="taxSettingTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($taxSettingType) ?>
    <fieldset>
        <legend><?= __('Add Tax Setting Type') ?></legend>
        <?php
            echo $this->Form->control('tax_setting_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
