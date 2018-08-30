<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TaxSettingType $taxSettingType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tax Setting Type'), ['action' => 'edit', $taxSettingType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tax Setting Type'), ['action' => 'delete', $taxSettingType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taxSettingType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tax Setting Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tax Setting Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tax Settings'), ['controller' => 'TaxSettings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tax Setting'), ['controller' => 'TaxSettings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="taxSettingTypes view large-9 medium-8 columns content">
    <h3><?= h($taxSettingType->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tax Setting Name') ?></th>
            <td><?= h($taxSettingType->tax_setting_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($taxSettingType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($taxSettingType->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($taxSettingType->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tax Settings') ?></h4>
        <?php if (!empty($taxSettingType->tax_settings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tax Setting Type Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($taxSettingType->tax_settings as $taxSettings): ?>
            <tr>
                <td><?= h($taxSettings->id) ?></td>
                <td><?= h($taxSettings->tax_setting_type_id) ?></td>
                <td><?= h($taxSettings->amount) ?></td>
                <td><?= h($taxSettings->created) ?></td>
                <td><?= h($taxSettings->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TaxSettings', 'action' => 'view', $taxSettings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TaxSettings', 'action' => 'edit', $taxSettings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TaxSettings', 'action' => 'delete', $taxSettings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taxSettings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
