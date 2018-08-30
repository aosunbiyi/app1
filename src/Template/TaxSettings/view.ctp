<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TaxSetting $taxSetting
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tax Setting'), ['action' => 'edit', $taxSetting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tax Setting'), ['action' => 'delete', $taxSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taxSetting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tax Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tax Setting'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tax Setting Types'), ['controller' => 'TaxSettingTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tax Setting Type'), ['controller' => 'TaxSettingTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="taxSettings view large-9 medium-8 columns content">
    <h3><?= h($taxSetting->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tax Setting Type') ?></th>
            <td><?= $taxSetting->has('tax_setting_type') ? $this->Html->link($taxSetting->tax_setting_type->id, ['controller' => 'TaxSettingTypes', 'action' => 'view', $taxSetting->tax_setting_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($taxSetting->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($taxSetting->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($taxSetting->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($taxSetting->modified) ?></td>
        </tr>
    </table>
</div>
